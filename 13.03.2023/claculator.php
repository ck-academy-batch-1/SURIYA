<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR</title>
</head>
<body>
    <h1> My Calculator </h1>

    <form method="POST">
		<label>Enter Number 1:</label>
		<input type="number" name="num1" required>
		<br>
		<br>
		<label>Enter Number 2:</label>
		<input type="number" name="num2" required>
		<br>
        <label>Select Operator:</label>
		<button name="operator" value="+">add</button>
        <button name="operator" value="-">sub</button>
        <button name="operator" value="*">multiply</button>
        <button name="operator" value="/">divide</button>
		<input type="submit" value="Calculate">
	</form>


    <?php
    class Calculator {
    private $num1;
    private $num2;
    private $operator;

    public function __construct($num1, $num2, $operator) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
        $this->calculate();
    }
    public function calculate() {
        if($this->operator == '+') {
          return $this->num1 + $this->num2;
        }
        elseif($this->operator == '-') {
          return $this->num1 - $this->num2;
        }
        elseif($this->operator == '*') {
          return $this->num1 * $this->num2;
        }
        elseif($this->operator == '/') {
          return $this->num1 / $this->num2;
        }
        else {
          return "Invalid operator";
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    $calc = new Calculator($num1, $num2, $operator);
    $result = $calc->calculate();
    echo "Result is:" . $result;
}
?>

</body>
</html>