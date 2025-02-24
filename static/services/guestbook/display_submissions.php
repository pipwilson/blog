<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submissions</title>
    <link rel="stylesheet" href="http://localhost:1111/main.css">
</head>
<body>
    <div class="container">
        <h1>Submissions</h1>
        <?php
        $rss_file = 'submissions.xml';
        $accepted_rss_file = 'accepted_submissions.xml';

        if ($_SERVER["REQUEST_METHOD"] == "POST" && (isset($_POST['reject']) || isset($_POST['accept']))) {
            $guid_to_process = $_POST['guid'];
            if (file_exists($rss_file)) {
                $rss = simplexml_load_file($rss_file);
                $dom = dom_import_simplexml($rss);
                foreach ($rss->channel->item as $index => $item) {
                    if ((string)$item->guid === $guid_to_process) {
                        $node = dom_import_simplexml($item);
                        if (isset($_POST['reject'])) {
                            $node->parentNode->removeChild($node);
                        } elseif (isset($_POST['accept'])) {
                            if (file_exists($accepted_rss_file)) {
                                $accepted_rss = simplexml_load_file($accepted_rss_file);
                            } else {
                                $accepted_rss = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><rss version="2.0"><channel><title>Accepted Submissions</title><link>http://example.com</link><description>Accepted Guestbook Submissions</description></channel></rss>');
                            }
                            $accepted_item = $accepted_rss->channel->addChild('item');
                            $accepted_item->addChild('title', $item->title);
                            $accepted_item->addChild('link', $item->link);
                            $accepted_item->addChild('description', $item->description);
                            $accepted_item->addChild('guid', $item->guid);
                            $accepted_item->addChild('pubDate', $item->pubDate);
                            $accepted_rss->asXML($accepted_rss_file);
                            $node->parentNode->removeChild($node);
                        }
                        break;
                    }
                }
                $dom->ownerDocument->save($rss_file);
            }
        }

        if (file_exists($rss_file)) {
            $rss = simplexml_load_file($rss_file);
            echo '<table>';
            echo '<tr><th>Name</th><th>URL</th><th>Description</th><th>Date</th><th>Actions</th></tr>';
            foreach ($rss->channel->item as $item) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($item->title, ENT_QUOTES, 'UTF-8') . '</td>';
                echo '<td><a href="' . htmlspecialchars($item->link, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($item->link, ENT_QUOTES, 'UTF-8') . '</a></td>';
                echo '<td>' . htmlspecialchars($item->description, ENT_QUOTES, 'UTF-8') . '</td>';
                echo '<td>' . htmlspecialchars($item->pubDate, ENT_QUOTES, 'UTF-8') . '</td>';
                echo '<td>';
                echo '<form method="post" style="display:inline;">';
                echo '<input type="hidden" name="guid" value="' . $item->guid . '">';
                echo '<button type="submit" name="accept" style="margin-right: 10px;">Accept</button>';
                echo '<button type="submit" name="reject">Reject</button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p>No submissions found.</p>';
        }
        ?>
    </div>
</body>
</html>
