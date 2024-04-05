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

// Example string
$string = "The quick brown fox jumps over the lazy dog";
echo "Original string: $string<br>";

// 1. Check if a pattern exists in a string using preg_match()
$pattern1 = "/quick/";
if (preg_match($pattern1, $string)) {
    echo "Pattern '$pattern1' found in the string.<br>";
} else {
    echo "Pattern '$pattern1' not found in the string.\n";
}

// 2. Search for a pattern and replace it using preg_replace()
$pattern2 = "/lazy/";
$replacement = "active ";
$new_string = preg_replace($pattern2,"$replacement", $string);
echo "Updated string after replacing '$pattern2': $new_string";

?>


</div>
</div>    
</body>
</html>