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
function replaceWord($str, $oldWord, $newWord) {
    // Using str_replace function to replace occurrences of a word in a string
    $modifiedString = str_replace($oldWord, $newWord, $str);
    return $modifiedString;
}
$string = "This is a sample string. This string contains sample content.";

$oldWord = "sample";
$newWord = "replacement";
$result = replaceWord($string, $oldWord, $newWord);
echo "Original string: $string\n";
echo "<br>";
echo "<br>";
echo "Modified string: $result";
?>
</div>
</div>    
</body>
</html>