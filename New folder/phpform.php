<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: red;}
body{
  background-image: url(from.jpg);
  background-size: cover;
  background-position: center;
  height: 100vh;
  background-repeat: no-repeat;
}
form{
  background-color: aqua;
  border: 10px solid black;
  border-radius: 15px;
  padding: 50px;
  width: 510px;
  height: 600px;
  margin-left: 32%;
  margin-top: 100px;
}
h1{
  color:purple;
  border: 10px solid black;
  border-radius: 15px;
  border-width: 20px;
}
h2{
  color: aquamarine;
  text-size-adjust: 10%;
}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $fathername = $mothername = $phone = $email = $gender = $address = $blood = $dept = $course = $photo = '';
$nameErr = $fathernameErr = $mothernameErr = $phoneErr = $emailErr = $genderErr = $addressErr = $bloodErr = $deptErr = $courseErr = $photoErr = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fathername"])) {
    $fathernameErr = "Father Name is required";
  } else {
    $fathername = test_input($_POST["fathername"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fathername)) {
      $fathernameErr = "Only letters and white space allowed";
    }
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["mothername"])) {
    $mothernameErr = "Mother Name is required";
  } else {
    $mothername = test_input($_POST["mothername"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$mothername)) {
      $mothernameErr = "Only letters and white space allowed";
    }
  }
} 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["phone"])) {
    $phone = "";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if URL address syntax is valid
    if (!preg_match('/^\d{10}$/',$phone)) {
      $phoneErr = "Invalid phone number";
    }    
  }
  
  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["blood"])) {
    $bloodErr = "Blood Group is required";
  } else {
    $blood = test_input($_POST["blood"]);
  }
  if (empty($_POST["dept"])) {
    $deptErr = "Department is required";
  } else {
    $dept = test_input($_POST["dept"]);
  }
  if (empty($_POST["course"])) {
    $courseErr = "Course is required";
  } else {
    $course = test_input($_POST["course"]);
  }
  if (empty($_POST["photo"])) {
    $photoErr = "Please select the file";
  } else {
    $photo = test_input($_POST["photo"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1 style="text-align: center;"> STUDENT REGISTRATION FORM </h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 <p><span class="error">* required field</span></p>  
  Name: <input type="text" name="name" placeholder="please enter your name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Father's Name: <input type="text" name="fathername" placeholder="please enter fathername">
  <span class="error">* <?php echo $fathernameErr;?></span>
  <br><br>
  Mother's Name: <input type="text" name="mothername" placeholder="please enter mothername">>
  <span class="error">* <?php echo $mothernameErr;?></span>
  <br><br>
  Phone Number: <input type="text" name="phone" placeholder="99********">
  <span class="error"><?php echo $phoneErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" placeholder="example@gmail.com">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Address: <textarea name="address" rows="5" cols="40"></textarea>
  <br><br>
  Blood Group:
  <select id="blood" name="blood">
  <option value="selected"></option>
  <option value="A+"<?php if ($blood == 'A+') echo ' '; ?>>A+</option>
  <option value="A-"<?php if ($blood == 'A-') echo ' '; ?>>A-</option>
  <option value="B+"<?php if ($blood == 'B+') echo ' '; ?>>B+</option>
  <option value="B-"<?php if ($blood == 'B-') echo ' '; ?>>B-</option>
  <option value="AB+"<?php if ($blood == 'AB+') echo ' '; ?>>AB+</option>
  <option value="AB-"<?php if ($blood == 'AB-') echo ' '; ?>>AB-</option>
  <option value="O+"<?php if ($blood == 'O+') echo ' '; ?>>O+</option>
  <option value="O-"<?php if ($blood == 'O-') echo ' '; ?>>O-</option>
  </select>
  <br><br>
  Department:
  <input type="radio" name="dept" value="cse">CSE
  <input type="radio" name="dept" value="eee">EEE
  <input type="radio" name="dept" value="bba">BBA
  <span class="error">* <?php echo $deptErr;?></span>
  <br><br>
  Course:
  <input type="checkbox" name="course" value="C">C
  <input type="checkbox" name="course" value="C++">C++
  <input type="checkbox" name="course" value="java">JAVA
  <input type="checkbox" name="course" value="php">PHP
  <input type="checkbox" name="course" value="python">PYTHON
  <span class="checkbox">* <?php echo $courseErr;?></span>
  <br><br>
  Photo:
  <input type="file" name="photo" id="photo">
  <span class="error">*<?php echo $photoErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <input type="reset" name="reset" value="Reset">
</form>
<div style="background-color:white; margin:auto">
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $fathername;
echo "<br>";
echo $mothername;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $address;
echo "<br>";
echo $blood;
echo "<br>";
echo $dept;
echo "<br>";
echo $course;
echo "<br>";
echo $photo;
?>
</div>

</body>
</html>