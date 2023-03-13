<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACTORIAL</title>
</head>
<body>
    <h1>Factorial Numbers</h1>
    <?php
    $n=20;
    $f=2;

    for($i=1;$i<=$n;$i++){
        $f=$f*$i;
    }
        echo "the Factorial of $n is $f";
    ?>
</body>
</html>