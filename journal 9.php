<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            height: 95vh;
            width: 100%;
            align-items: center;
            justify-content: center;
        }
        .subcontainer {
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
            // Define the array
            $array = [5, 9, 3, 15, 7, 2];
            // Initialize a variable to hold the maximum number
            $max = $array[0]; // Assume the first element is the maximum
            // Loop through the array to find the maximum number
            foreach ($array as $num) {
                if ($num > $max) {
                    $max = $num; // Update max if a larger number is found
                }
            }
            // Print the maximum number
            echo "The Elements in the array :";
            for ($i = 0; $i < 6; $i++) {
                echo "$array[$i]\t";
            }
            echo "<br>";
            echo "<br>";
            echo "The largest number in the array is: $max\n";
            ?>
        </div>
    </div>
</body>
</html>