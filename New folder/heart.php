<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> HEART SHAPE </h1>
    <?php
    $size = 6;
    
    for ($i = $size / 2; $i < $size; $i += 2) {
        for ($j = 1; $j < $size - $i; $j += 2) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j < $i + 1; $j++) {
            echo "♥";
        }
        for ($j = 1; $j < $size - $i + 1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j < $i + 1; $j++) {
            echo "♥";
        }
        echo "<br>";
    }
    for ($i = $size; $i > 0; $i--) {
        for ($j = 0; $j < $size - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j < $i * 2; $j++) {
            echo "♥";
        }
        echo "<br>";
    }
?>
</body>
</html>