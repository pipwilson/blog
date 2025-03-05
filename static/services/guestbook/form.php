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

        // redirect back to source page
        header('Location: ' . $source);
    } else {
        // echo "<p>Invalid humanity check.</p>";
        header('Location: ' . $source);
    }
} else {
    echo "<p>Fly, you fools.</p>";
}
?>
