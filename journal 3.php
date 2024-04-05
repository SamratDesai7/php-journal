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
function countWords($str) {
    // Using str_word_count function to count words in a string
   $wordCount = str_word_count($str);
   return $wordCount;
}
$string = "This is a sample string.";
$result = countWords($string);
echo "'$string'<br><br>";
echo "Total number of words in the above string: $result";
?>
</div>
</div>    
</body>
</html>