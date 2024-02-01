<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Define the folder where you want to save the HTML pages
    $folderPath = 'your_directory/';

    // Generate a unique filename based on the current timestamp
    $filename = 'generated_page_' . time() . '.html';

    // Construct the full path to the file
    $filePath = $folderPath . $filename;

    // Get the HTML content from the POST request
    $htmlContent = $_POST['htmlContent'];

    // Save the HTML content to the file
    file_put_contents($filePath, $htmlContent);

    echo 'Page saved successfully as ' . $filename;
} else {
    echo 'Invalid request.';
}
?>
