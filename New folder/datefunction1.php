<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODAY IS MY BIRTHDAY</title>
</head>
<body>
    <h1>Today Date</h1>
    <?php
      echo "Today date is: " . date("d/m/Y");
    ?>
    <br>
    <hr>
     <?php
      echo "Today date is: " . date("Y.m.d");
    ?>
    <br>
    <hr>
    <?php
      echo "Today date is: " . date("m-d-Y");
    ?>
    <br>
    <hr>
    <?php
      echo "Today date is: " . date("Y:m:d");
    ?>
    <br>
    <hr>
    <h1>Today Day </h1>
    <?php
      echo "Today day is: " . date("l");
    ?>
    <br>
    <hr>
    <h1>Today Time</h1>
    <?php
      date_default_timezone_set('Asia/Kolkata');
      echo "Today Current Time is: " . date("H:i:s A");
      echo "<br>";
      echo "Today Current Time is: " . date("h:i:s A");
    ?>
    <br>
    <hr>
    <h1>Make Time </h1>
    <?php
      $t=mktime(14, 59, 59, 3, 1, 2023);
      echo "Created date is " . date("Y-m-d H:i:s a", $t);
    ?>
    <br>
    <hr>
    <h1>String to Time</h1>
    <?php
      $d=strtotime("10:30pm March 01 1999");
      echo "Created date is " . date("Y-m-d H:i:s a", $d);
    ?>
    <br>
    <hr>
</body>
</html>
