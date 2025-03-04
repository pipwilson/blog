<?php

function sanitize_filename($filename) {
    return preg_replace('/[^A-Za-z0-9_\-]/', '_', $filename);
}

function strip_whitespace($value) {
    if (is_array($value)) {
        return array_map('strip_whitespace', $value);
    }
    return trim(preg_replace('/\s+/', ' ', $value));
}

function save_book_details($book_details) {
    $book_name = $book_details['name'][0];
    $filename = strtolower(sanitize_filename($book_name)) . '.json';
    $json_data = json_encode($book_details, JSON_PRETTY_PRINT);

    $books_dir = 'books';

    // Create the books directory if it doesn't exist
    if (!is_dir($books_dir)) {
        mkdir($books_dir, 0777, true);
    }

    file_put_contents("$books_dir/$filename", $json_data);
}

function process_url($url) {
    $unprocessed_file_path = 'unprocessed_urls.txt';
    $processed_file_path = 'processed_urls.txt';

    $unprocessed_urls = file_exists($unprocessed_file_path) ? file($unprocessed_file_path, FILE_IGNORE_NEW_LINES) : [];

    // Remove the URL from unprocessed URLs and add it to processed URLs
    if (($key = array_search($url, $unprocessed_urls)) !== false) {
        unset($unprocessed_urls[$key]);
        file_put_contents($unprocessed_file_path, implode(PHP_EOL, $unprocessed_urls) . PHP_EOL);
        file_put_contents($processed_file_path, $url . PHP_EOL, FILE_APPEND);
    }
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json_input = file_get_contents('php://input');
    $data = json_decode($json_input, true);

    if ($data !== null) {
        $book_details = [
            'name' => strip_whitespace($data['properties']['name'] ?? []),
            'isbn' => strip_whitespace($data['properties']['isbn'] ?? []),
            'author' => strip_whitespace(array_map(function($author) {
                return $author['properties']['name'][0] ?? '';
            }, $data['properties']['author'] ?? [])),
            'image' => strip_whitespace($data['properties']['image'] ?? []),
            'url' => strip_whitespace($data['properties']['offers'][0]['properties']['url'][0] ?? '')
        ];

        save_book_details($book_details);

        // Process the URL
        $url = $data['properties']['offers'][0]['properties']['url'][0] ?? '';
        if ($url) {
            process_url($url);
        }
    } else {
        echo('Invalid JSON input');
        exit;
    }
} else {
    echo('POST request not received: ' . $_SERVER['REQUEST_METHOD']);
    exit;
}

echo('Book details saved successfully');
exit;
?>
