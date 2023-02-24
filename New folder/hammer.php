<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> HAMMER SHAPE </h1>
<?php
echo "<pre>";
$size = 10; 

for ($row = 1; $row <= $size; $row++) {
  for ($col = 1; $col <= $size; $col++) {
    if ($row <= 3 || $col == ($size / 2)) {
      echo "* ";
    } else {
      echo "&nbsp;&nbsp;";
    }
  }
  echo "<br>";
}
echo "</pre>";
?>
</body>
</html>