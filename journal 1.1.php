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
            text-align: center;
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
// Swapping with variables
$a = 5;
$b = 10;
echo "SWAPPING USING THIRD VARIABLE"."<br>";
echo "\nBefore swapping: a = $a, b = $b\n";
echo "<br>";
$temp = $a;
$a = $b;
$b = $temp;
echo "After swapping: a = $a, b = $b\n";
?>
</div>
</div>    
</body>
</html>