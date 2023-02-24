<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<pre>";
$size = 30; 

for ($row = 1; $row <= $size; $row++) {
  for ($col = 1; $col <= $size; $col++) {
    if ($row == 1 && ($col == 4 || $col == 5)) {
      echo "|";
    } elseif ($row == 2 && ($col == 3 || $col == 4 || $col == 5 || $col == 6)) {
      echo "|";
    } elseif ($row == 3 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)) {
      echo "|";
    }  elseif ($row == 4 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 5 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";  
    }  elseif ($row == 6 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 7 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 8 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 9 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 10 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 11 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 12 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 13 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 14 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 15 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 16 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 17 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 18 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    }  elseif ($row == 19 && ($col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7)){
        echo "|";
    } elseif ($row == 20 && ($col == 1 || $col == 2 || $col == 3 || $col == 4 || $col == 5 || $col == 6 || $col == 7 || $col == 8)) {
      echo "*";
    } elseif ($row == 21 && ($col == 4 || $col == 5 )) {
      echo "|";
    } elseif ($row == 22 && ($col == 4 || $col == 5 )) {
      echo "|";
    } elseif ($row == 23 && ($col == 4 || $col == 5 )) {
      echo "|";
    } elseif ($row == 24 && ($col == 2 || $col == 3 || $col == 4 )) {
        echo "||";
    } elseif ($row == 25 && ($col == 2 || $col == 3 || $col == 4 )) {
        echo "||";
    } elseif ($row == 26 && ($col == 2 || $col == 3 || $col == 4 )) {
        echo "||";
    } elseif ($row == 27 && ($col == 2 || $col == 3 || $col == 4 )) {
        echo "**";
    } else {
      echo "&nbsp;";
    }
  }
  echo "<br>";
}
echo "</pre>";
?>
</body>
</html>