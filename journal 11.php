<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Calculator</title>
<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 97vh;
    }
    .calculator {
        width: 300px;
        margin: 50px auto;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        background-color: #fff;
    }
    input[type="text"] {
        width: calc(100% - 20px);
        margin-bottom: 10px;
        padding: 10px;
        font-size: 18px;
    }
    .operator-buttons {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 5px;
    }
    .operator-buttons button {
        padding: 10px;
        font-size: 18px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }
    .operator-buttons button:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<div class="calculator">
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Enter first number" required><br>
        <input type="text" name="num2" placeholder="Enter second number" required><br>
        <div class="operator-buttons">
            <button type="submit" name="operator" value="add">+</button>
            <button type="submit" name="operator" value="subtract">-</button>
            <button type="submit" name="operator" value="multiply">*</button>
            <button type="submit" name="operator" value="divide">/</button>
        </div>
    </form>

    <?php
    if(isset($_POST['operator'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error! Division by zero.";
                }
                break;
            default:
                $result = "Invalid operator";
        }

        echo "Result: $result";
    }
    ?>
</div>

</body>
</html>
