<?php

function log_message($message) {
    $date = date('Y-m-d');
    $timestamp = date('Y-m-d H:i:s');
    $log_dir = "logs";
    $log_file_path = "$log_dir/log_$date.txt";

    // Create the logs directory if it doesn't exist
    if (!is_dir($log_dir)) {
        mkdir($log_dir, 0777, true);
    }

    file_put_contents($log_file_path, "[$timestamp] $message" . PHP_EOL, FILE_APPEND);
}

function combine_books_json() {
    $books_dir = 'books';
    $combined_data = [];

    if (is_dir($books_dir)) {
        $files = glob("$books_dir/*.json");

        foreach ($files as $file) {
            $json_data = file_get_contents($file);
            $book_data = json_decode($json_data, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                $combined_data[] = $book_data;
            } else {
                log_message("Error decoding JSON from file: $file");
            }
        }

        $combined_json = json_encode($combined_data, JSON_PRETTY_PRINT);

        if (json_last_error() === JSON_ERROR_NONE) {
            file_put_contents('books.json', $combined_json);
            log_message("Combined JSON file created successfully.");
        } else {
            log_message("Error encoding combined JSON data.");
        }
    } else {
        log_message("Books directory does not exist.");
    }
}

combine_books_json();

?>
