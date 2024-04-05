<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
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
        form{
          display: flex;
          flex-direction: column;
        }
        input{
          width: 10rem;
          margin: 4px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="subcontainer">
 <h2>Age Calculator</h2>
 <form method="post" action="">
     Enter your birthdate: <input type="date" name="birthdate" required>
      Enter the date to calculate age on: <input type="date" name="calcDate" required>
     <input type="submit" value="Calculate Age">
  </form>
   <?php
   // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get the entered birthdate and calculation date
  $birthdate = $_POST["birthdate"];
     $calcDate = $_POST["calcDate"];
      // Calculate age using DateTime objects
 $birthDateTime = new DateTime($birthdate);
   $calcDateTime = new DateTime($calcDate);
        $age = $birthDateTime->diff($calcDateTime)->y;
      echo "<h3>Your from ". $birthdate ." to $calcDate is: $age years</h3>";
    }
 ?>
    </div>
    </div>
</body>
</html>