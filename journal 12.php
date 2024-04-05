<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
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
            flex-direction: column;
            border: 2px solid black;
            padding: 2rem;
            border-radius: 1rem;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="subcontainer">
        <h2>Multiplication Table Generator</h2>
   <form method="post" action="">
       Enter a number: <input type="text" name="number" required>
       <input type="submit" value="Generate Table">
    </form>
    <?php
  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered number
    $number = $_POST["number"];
   // Validate if the input is a positive integer
   if (is_numeric($number) && $number > 0 && filter_var($number, FILTER_VALIDATE_INT)) {
            echo "<h3>Multiplication Table for $number</h3>";
            echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                $result = $number * $i;
                echo "<tr><td>$number x $i</td><td>=</td><td>$result</td></tr>";
            }
            echo "</table>";
       } 
       else {
           echo "<p>Please enter a valid positive integer.</p>";
        }
 }
 ?>
</div>
</div>
</body>
</html>