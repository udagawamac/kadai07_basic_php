<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name  = $_POST["name"];
$email = $_POST["email"];
$memo  = $_POST["color"];
$c     =",";
$str   = $name.$c.$email.$c.$memo;

// $fields = [$name,$email,$color];
// foreach ($fields as $field){
$file = fopen("data.csv","a");
fwrite($file, $str."\n");
fclose($file);

header("Location: read.php");
exit;
// }
?>
</body>
</html>