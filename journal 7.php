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
// Function to calculate the area of a triangle
function triangleArea($base, $height) {
    return 0.5 * $base * $height;
}
// Function to calculate the area of a rectangle
function rectangleArea($length, $width) {
    return $length * $width;
}
$triangleBase = 6;
$triangleHeight = 4;
$rectangleLength = 8;
$rectangleWidth = 5;
// Calculate and display the area of the triangle
$triangleArea = triangleArea($triangleBase, $triangleHeight);
echo "Base of the triangle: $triangleBase<br>";
echo "Height of the triangle: $triangleHeight<br>";
echo "Area of the triangle: $triangleArea<br>";
echo"<br>";
// Calculate and display the area of the rectangle
$rectangleArea = rectangleArea($rectangleLength, $rectangleWidth);
echo "Length of the rectangle: $rectangleLength<br>";
echo "Width of the rectangle: $rectangleWidth<br>";
echo "Area of the rectangle: $rectangleArea<br>";
?>
</div>
</div>
</body>
</html>