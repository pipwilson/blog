<?php

function extract_url_from_markdown($markdown) {
    preg_match('/\((https:\/\/uk\.bookshop\.org\/p\/books\/[^\)]+)\)/', $markdown, $matches);
    if (empty($matches[1])) {
        return null;
    }
    return $matches[1];
}

function save_url_if_not_exists($url) {
    $unprocessed_file_path = 'unprocessed_urls.txt';
    $processed_file_path = 'processed_urls.txt';

    $unprocessed_urls = file_exists($unprocessed_file_path) ? file($unprocessed_file_path, FILE_IGNORE_NEW_LINES) : [];
    $processed_urls = file_exists($processed_file_path) ? file($processed_file_path, FILE_IGNORE_NEW_LINES) : [];

    if (!in_array($url, $unprocessed_urls) && !in_array($url, $processed_urls)) {
        file_put_contents($unprocessed_file_path, $url . PHP_EOL, FILE_APPEND);
    }
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo('GET request received');
    $markdown = file_get_contents('php://input') ?? null;

    echo('Received markdown: ' . $markdown);

    if ($markdown !== null) {
        $url = extract_url_from_markdown($markdown);
        if ($url === null) {
            echo('didn\'t find a URL in the markdown');
            exit;
        }

        // Save the URL if it does not already exist in either file
        echo('Extracted URL: ' . $url);
        save_url_if_not_exists($url);
    }
} else {
    echo('GET request not received: ' . $_SERVER['REQUEST_METHOD']);
    exit;
}

echo('shortcode finished');
exit;
?>