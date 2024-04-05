<!DOCTYPE html>
<html>
<head>
    <title>Student Information Form</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container{
            border: 2px solid black;
            height: 20rem;
            width: 20rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content:center;
            border-radius: 1rem;
        }
        .btn{
            margin: 0.2rem;
            width: 5rem;
        }
    </style>
</head>
<body>
<div class="container">
<h2>Student Information Form</h2>

<form method="post" action="14b.php">
    <label for="roll_no">Roll No:</label><br>
    <input type="text" id="roll_no" name="roll_no"><br>

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="class">Class:</label><br>
    <input type="text" id="class" name="class"><br>

    <label for="contact">Contact No:</label><br>
    <input type="text" id="contact" name="contact"><br>

    <label for="email">Email ID:</label><br>
    <input type="email" id="email" name="email"><br>

    <input type="submit" class="btn" name="submit" value="Submit">
    <input type="submit" class="btn" name="Show" value="Show">
</form>
</div>
</body>
</html>
