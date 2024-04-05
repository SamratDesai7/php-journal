<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Information</title>
   <style>
      * {
         margin: 0%;
         padding: 0%;
      }
      body {
         display: flex;
         justify-content: center;
         align-items: center;
      }
      .container {
         display: flex;
         flex-direction: column;
         margin: 3rem;
         align-items: center;
         justify-content: center;
      }
      .subcontainer {
         display: flex;
         flex-direction: column;
         border: 2px solid black;
         padding: 2rem;
         border-radius: 1rem;
         justify-content: center;
         align-items: center;
         height: 27rem;
         width: 19rem;
         box-shadow: 1px 1px 6px gray;
      }
      form {
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: center;
      }
      input {
         margin: 2px;
         width: 15rem;
      }
      .btn {
         cursor: pointer;
      }
   </style>
</head>
<body>
   <div class="container">
      <div class="subcontainer">
         <h2>Semester Mark List Form</h2>
         <form method="post" action="">
            PRN: <input type="text" name="prn" required>
            Name: <input type="text" name="name" required>
            Roll Number: <input type="text" name="rollNo" required>
            Class: <input type="text" name="class" required>
            <!-- Input fields for subject marks -->
            <h3>Enter Semester Marks:</h3>
            Subject 1: <input type="text" name="subject1" required>
            Subject 2: <input type="text" name="subject2" required>
            Subject 3: <input type="text" name="subject3" required>
            Subject 4: <input type="text" name="subject4" required>
            Subject 5: <input type="text" name="subject5" required>
            <input class="btn" type="submit" value="Generate Semester Mark List">
         </form>
      </div>
   </div>
</body>
</html>
