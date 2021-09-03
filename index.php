<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="converter.js"></script> -->
</head>
<body>

<?php
$dir = '/1/01';
$files = scandir($dir);
$files = array_diff(scandir($path), array('.', '..')); //remove . and .. from the returned array from scandir
foreach ($files as $file) {
    fwrite($out, file_get_contents($file));
}
echo $out;
?>

</body>
</html>