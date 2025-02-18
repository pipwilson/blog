<?php

function extract_urls_from_html($html) {
    preg_match_all('/https:\/\/uk\.bookshop\.org\/p\/books\/[^\s"]+/', $html, $matches);
    return $matches[0] ?? [];
}

function save_url_if_not_exists($url) {
    $unprocessed_file_path = 'unprocessed_urls.txt';
    $processed_file_path = 'processed_urls.txt';

    $unprocessed_urls = file_exists($unprocessed_file_path) ? file($unprocessed_file_path, FILE_IGNORE_NEW_LINES) : [];
    $processed_urls = file_exists($processed_file_path) ? file($processed_file_path, FILE_IGNORE_NEW_LINES) : [];

    // only save the URL if we haven't seen it before
    // in the future I might want a way of recording the same book twice but NOT TODAY.
    if (!in_array($url, $unprocessed_urls) && !in_array($url, $processed_urls)) {
        file_put_contents($unprocessed_file_path, $url . PHP_EOL, FILE_APPEND);
    }
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input') ?? null;

    if ($input !== null) {

        $data = json_decode($input, true, 2, JSON_INVALID_UTF8_IGNORE);
        if (json_last_error() !== JSON_ERROR_NONE) {
            exit;
        }

        $pageUrl = $data['pageUrl'] ?? null;
        $html = urldecode($data['text']) ?? null;

        if ($html !== null) {
            $urls = extract_urls_from_html($html);
            if (empty($urls)) {
                exit;
            }

            // Save each URL if it does not already exist in either file
            foreach ($urls as $url) {
                save_url_if_not_exists($url);
            }
        }
    }
} else {
    exit;
}

exit;
?>