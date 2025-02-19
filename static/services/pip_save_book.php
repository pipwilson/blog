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
        log_message("URL saved: $url");
    } else {
        log_message("URL already exists: $url");
    }
}

function log_message($message) {
    $date = date('d-m-Y');
    $log_dir = "logs";
    $log_file_path = "$log_dir/log_$date.txt";

    // Create the logs directory if it doesn't exist
    if (!is_dir($log_dir)) {
        mkdir($log_dir, 0777, true);
    }

    file_put_contents($log_file_path, $message . PHP_EOL, FILE_APPEND);
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    log_message("Request method is POST");
    $input = file_get_contents('php://input') ?? null;

    if ($input !== null) {
        log_message("Input received: $input");

        $data = json_decode($input, true, 2, JSON_INVALID_UTF8_IGNORE);
        if (json_last_error() !== JSON_ERROR_NONE) {
            log_message("JSON decode error: " . json_last_error_msg());
            exit;
        }

        $pageUrl = $data['pageUrl'] ?? null;
        $html = urldecode($data['text']) ?? null;

        if ($html !== null) {
            log_message("HTML content received");

            $urls = extract_urls_from_html($html);
            if (empty($urls)) {
                log_message("No URLs found in HTML");
                exit;
            }

            // Save each URL if it does not already exist in either file
            foreach ($urls as $url) {
                save_url_if_not_exists($url);
            }
        } else {
            log_message("HTML content is null");
        }
    } else {
        log_message("No input received");
    }
} else {
    log_message("Request method is not POST");
    exit;
}

exit;
?>