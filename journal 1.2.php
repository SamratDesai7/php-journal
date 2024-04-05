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
// Swapping without variables
$a = 5;
$b = 10;
echo "SWAPPING WITHOUT USING THIRD VARIABLE"."<br>";
echo "Before swapping: a = $a, b = $b";
echo "<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "After swapping: a = $a, b = $b\n";
?>
</div>
</div>    
</body>
</html>