<?php

function extract_urls_from_markdown($markdown) {
    preg_match_all('/\((https:\/\/uk\.bookshop\.org\/p\/books\/[^\)]+)\)/', $markdown, $matches);
    return $matches[1] ?? [];
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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $markdown = file_get_contents('php://input') ?? null;

    if ($markdown !== null) {
        $urls = extract_urls_from_markdown($markdown);
        if (empty($urls)) {
            echo('No URLs found in the markdown');
            exit;
        }

        // Save each URL if it does not already exist in either file
        foreach ($urls as $url) {
            save_url_if_not_exists($url);
        }
    }
} else {
    echo('POST request not received: ' . $_SERVER['REQUEST_METHOD']);
    exit;
}

echo('shortcode finished');
exit;
?>