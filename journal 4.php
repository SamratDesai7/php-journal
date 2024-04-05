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
function countOccurrences($str, $word) {
    // Using substr_count function to count occurrences of a word in a string
    $occurrences = substr_count($str, $word);
    return $occurrences;
}
$string = "This is a sample string. This string contains sample content.";
$targetWord = "sample";
$result = countOccurrences($string, $targetWord);
echo "$string<br><br>";
echo "The word '$targetWord' occurs $result times in the string.";
?>
</div>
</div>    
</body>
</html>
