<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    h2 {
    color: red;
    }
</style>
</head>
<body>
    <h1>Showing how php functions result:</h1>

<h2>file_get_contents() :</h2>

<?php
echo file_get_contents("testing1.txt");
?>

<h2>file_put_contents() :</h2>
<?php

$filename = 'testing2.txt';
$data = "happy birthday";
file_put_contents($filename, $data, FILE_APPEND);

echo file_get_contents("testing2.txt");

?>
<h2>file_exists() :</h2>

<?php
$filename = 'testing3.txt';
$lines = file($filename);

if ($lines === false) {
    echo "Could not read the file.";
} else {
    foreach ($lines as $line) {
        echo $line . "<br>"; // Displays each line of the file with line breaks
    }
}
?>


<h2>file() :</h2>

<?php print_r(file("testing4.txt")); ?>

</body>
</html>