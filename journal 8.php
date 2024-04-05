<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            flex-direction: column;
            height: 95vh;
            width: 100%;
            align-items: center;
            justify-content: center;            
        }
        .subcontainer{
            display: flex;
            border: 2px solid black;
            padding: 2rem;
            border-radius: 1rem;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="subcontainer">
        <?php
// Function to calculate the GCD of two numbers
function findGCD($num1, $num2) {
    while ($num2 != 0) {
        $temp = $num2;
        $num2 = $num1 % $num2;
        $num1 = $temp;
   }
    return $num1;
}
$number1 = 24;
$number2 = 36;
// Calculate and display the GCD of the two numbers
$gcd = findGCD($number1, $number2);
echo"Number1 is $number1<br>";
echo"Number2 is $number2<br>";
echo "GCD of $number1 and $number2 is: $gcd\n";
?>
</div>
</div>
</body>
</html>