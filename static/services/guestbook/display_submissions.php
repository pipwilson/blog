<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submissions</title>
    <link rel="stylesheet" href="https://philwilson.org/main.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            font-weight: bold;
        }

        td:nth-child(1),
        td:nth-child(2),
        td:nth-child(3) {
            width: 5%;
            max-width: 5%;
        }

        td:nth-child(5) {
            width: 10%;
            max-width: 10%;
        }

        td:nth-child(6) {
            width: 10%;
            max-width: 10%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Submissions</h1>
        <p><a href="display_submissions.php">Update</a></p>
        <?php

        function get_atom_header($blogposturl)
        {
            return '<?xml version="1.0" encoding="UTF-8" ?>
            <feed xmlns="http://www.w3.org/2005/Atom">
            <title>Accepted Submissions for ' . $blogposturl . '</title>
            <link href="' . $blogposturl . '"/>
            <id>' . $blogposturl . '</id>
            <updated>' . date('c') . '</updated>
            <author><name>Guestbook Submissions</name></author>
            </feed>';
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && (isset($_POST['reject']) || isset($_POST['accept']))) {
            $submission_filename = $_POST['filename'];
            if (file_exists($submission_filename)) {
                $atom_submissions = simplexml_load_file($submission_filename);
                $submissions_dom = dom_import_simplexml($atom_submissions);
                $id_to_process = $_POST['id'];
                $blogposturl = $_POST['blogposturl'];

                $xpath = new DOMXPath($submissions_dom->ownerDocument);
                $xpath->registerNamespace('atom', 'http://www.w3.org/2005/Atom');
                $submitted_entries = $xpath->query("//atom:entry[atom:id=\"" . trim($id_to_process) . "\"]");

                foreach ($submitted_entries as $entry) {
                    if (isset($_POST['reject'])) {
                        echo 'Rejecting ' . $entry->getElementsByTagName('title')->item(0)->nodeValue;
                        $entry->parentNode->removeChild($entry);
                    } elseif (isset($_POST['accept'])) {
                        $accepted_atom_filename = str_replace('-submissions.xml', '-accepted.xml', $submission_filename);

                        if (file_exists($accepted_atom_filename)) {
                            $accepted_atom = simplexml_load_file($accepted_atom_filename);
                        } else {
                            $accepted_atom = new SimpleXMLElement(get_atom_header($blogposturl));
                        }

                        // Import the entry node into the accepted_atom document
                        $accepted_dom = dom_import_simplexml($accepted_atom);
                        $imported_entry = $accepted_dom->ownerDocument->importNode($entry, true);
                        $accepted_dom->appendChild($imported_entry);

                        $accepted_atom->asXML($accepted_atom_filename);
                        $entry->parentNode->removeChild($entry);
                    }
                }
                $submissions_dom->ownerDocument->save($submission_filename);
            }
        }


        echo '<table>';
        echo '<tr><th>Name</th><th>URL</th><th>Blog post</th><th>Comment</th><th>Date</th><th>Actions</th></tr>';

        $files = glob('*-submissions.xml');
        foreach ($files as $submission_filename) {
            if (file_exists($submission_filename)) {
                $atom_submissions = simplexml_load_file($submission_filename);
                foreach ($atom_submissions->entry as $entry) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($entry->author->name, ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td><a href="' . htmlspecialchars($entry->link['href'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($entry->link['href'], ENT_QUOTES, 'UTF-8') . '</a></td>';
                    echo '<td>' . htmlspecialchars($atom_submissions->id, ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td>' . htmlspecialchars($entry->content, ENT_QUOTES, 'UTF-8') . '</td>';
                    $updated = date('j F Y, G:i', strtotime($entry->updated));
                    echo '<td>' . htmlspecialchars($updated, ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td>';
                    echo '<form method="post" style="display:inline;">';
                    echo '<input type="hidden" name="blogposturl" value="' . $atom_submissions->id . '">';
                    echo '<input type="hidden" name="filename" value="' . $submission_filename . '">';
                    echo '<input type="hidden" name="id" value="' . $entry->id . '">';
                    echo '<button type="submit" name="accept" style="margin-right: 10px;">Accept</button>';
                    echo '<button type="submit" name="reject">Reject</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }
            }
        }
        echo '</table>';
        ?>
    </div>
</body>

</html>