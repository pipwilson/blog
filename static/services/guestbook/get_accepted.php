<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['filename'])) {
    $accepted_filename = basename($_GET['filename']);

    // Ensure the file name ends with '-accepted.xml'
    if (substr($accepted_filename, -13) === '-accepted.xml' && file_exists($accepted_filename)) {
        header('Content-Type: application/xml');
        readfile($accepted_filename);
    } else {
        header("HTTP/1.0 404 Not Found");
        echo "File not found.";
    }
} else {
    header("HTTP/1.0 400 Bad Request");
    echo "Invalid request.";
}
