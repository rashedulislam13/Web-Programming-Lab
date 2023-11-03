<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="">
        <label for="num1">Enter the first number:</label>
        <input type="text" name="num1" id="num1">
        <br> <br> 
        <label for="num2">Enter the second number:</label>
        <input type="text" name="num2" id="num2">
        <br> <br>
        <input type="submit" name="operation" value="Addition (+)">
        <input type="submit" name="operation" value="Subtraction (-)">
        <input type="submit" name="operation" value="Multiplication (*)">
        <input type="submit" name="operation" value="Division (/)">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        switch ($operation) {
            case 'Addition (+)':
                $result = $num1 + $num2;
                break;
            case 'Subtraction (-)':
                $result = $num1 - $num2;
                break;
            case 'Multiplication (*)':
                $result = $num1 * $num2;
                break;
            case 'Division (/)':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Division by zero is not allowed.";
                }
                break;
            default:
                echo "Invalid operation selected.";
        }
    ?>
    <p>Result: <?php echo $result; ?></p>
    <?php
    }
    ?>
</body>
</html>
