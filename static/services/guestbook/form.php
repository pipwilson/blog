<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Your Information</title>
    <link rel="stylesheet" href="http://localhost:1111/main.css"> <!-- Adjust the path to your base.css file -->
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <h1>Submit Your Information</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $url = htmlspecialchars($_POST['url']);
            $text = htmlspecialchars($_POST['text']);
            $humanity = htmlspecialchars($_POST['humanity']);
            $expected_humanity = htmlspecialchars($_POST['title']);
            $source = htmlspecialchars($_POST['source']);
            $date = date('Y-m-d H:i:s');

            if ($humanity === $expected_humanity && !empty($source) && !empty($name) && !empty($text)) {
                $rss_file = 'submissions.xml';

                if (file_exists($rss_file)) {
                    $rss = simplexml_load_file($rss_file);
                } else {
                    $rss = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><rss version="2.0"><channel><title>Submissions</title><link>http://example.com</link><description>Guestbook Submissions</description></channel></rss>');
                }

                $item = $rss->channel->addChild('item');
                $item->addChild('title', $name);
                $item->addChild('link', $url);
                $item->addChild('description', $text);
                $item->addChild('guid', uniqid('item-', true));
                $item->addChild('pubDate', $date);
                $item->addChild('source', $source);

                $rss->asXML($rss_file);

                echo "<p>Submission saved successfully.</p>";
            } else {
                echo "<p>Invalid humanity check.</p>";
            }
        }
        ?>
        <form action="form.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="url" id="url" name="url">
            </div>
            <div class="form-group">
                <label for="text">Text:</label>
                <textarea id="text" name="text" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="humanity">Humanity:</label>
                <input type="text" id="humanity" name="humanity">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
