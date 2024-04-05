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
            // Function to find the smallest number in an array
            function findSmallestNumber($arr)
            {
                $n = count($arr);
                // Check if the array is not empty
                if ($n > 0) {
                    $smallest = $arr[0];
                    // Loop through the array to find the smallest number
                    for ($i = 1; $i < $n; $i++) {
                        if ($arr[$i] < $smallest) {
                            $smallest = $arr[$i];
                        }
                    }
                    return $smallest;
                } else {
                    return "Array is empty.";
                }
            }
            // Example usage
            $numbers = [15, 7, 22, 13, 45, 9, 17];
            // Find and display the smallest number in the array
            echo "The Elements in the array :";
            for ($i = 0; $i < 7; $i++) {
                echo "$numbers[$i]\t";
            }
            echo "<br>";
            echo "<br>";
            $smallestNumber = findSmallestNumber($numbers);
            echo "The smallest number in the array is: $smallestNumber\n";
            ?>
        </div>
    </div>
</body>
</html>