<?php
// Set the path to your file
$file_path = 'example.txt';

// Read the contents of the file
$file_contents = file_get_contents($file_path);

// Create an HTML form with a textarea to display the contents of the file
echo '<form method="post">';
echo '<textarea name="file_contents" rows="10" cols="80">' . htmlspecialchars($file_contents) . '</textarea>';
echo '<input type="submit" value="Save">';
echo '</form>';

// Check if the form has been submitted and save the contents of the textarea back to the file
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_file_contents = $_POST['file_contents'];
    file_put_contents($file_path, $new_file_contents);
}
?>
