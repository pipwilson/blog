<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Content-Type: text/plain');
    $file_path = 'unprocessed_urls.txt';

    if (file_exists($file_path)) {
        $urls = file($file_path, FILE_IGNORE_NEW_LINES);
        foreach ($urls as $url) {
            echo $url . "\n";
        }
    } else {
        echo "No unprocessed URLs found.\n";
    }
} else {
    echo "Invalid request method.\n";
}

?>
