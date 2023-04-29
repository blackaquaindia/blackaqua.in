<?php
$file = "example.txt"; // replace "example.txt" with the name of your text file

if(isset($_POST['content'])) {
    $content = $_POST['content'];
    file_put_contents($file, $content);
}
$text = file_get_contents($file);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Text File</title>
</head>
<body>
    <h1>Edit Text File</h1>
    <form method="post">
        <textarea name="content" rows="10" cols="50"><?php echo htmlspecialchars($text); ?></textarea><br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
