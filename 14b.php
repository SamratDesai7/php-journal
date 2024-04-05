<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         a {
        display: inline-block;
        padding: 0.3rem;
        text-decoration: none;
        height: 100%;
        width: 100%;
        color: black;

    }
    </style>
</head>
<body>
    
    <?php
$rollNo = $_POST['roll_no'];
$name = $_POST['name'];
$class = $_POST['class'];
$contact = $_POST['contact'];
$email = $_POST['email'];

$connect = mysqli_connect('localhost','root','','student_info');
if($connect->connect_error){
    die('connection failed :'. $connect->connect_error);
}
elseif(isset($_POST['submit'])){
    $stmt = $connect->prepare('insert into students(roll_no,name,class,contact_no,email)
    values(?,?,?,?,?)');
    $stmt->bind_param('issis', $rollNo,$name,$class,$contact,$email);
    $stmt->execute();
    echo 'registration successfully';
    echo '<button> <a href="journal14.php"> Try again</a> </button>';
    $stmt->close();
    $connect->close();
}
elseif(isset($_POST['Show'])){
    $sql = "SELECT * FROM students";
    $result = mysqli_query($connect, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            
            echo "<table border = '2px'>";
            echo "<tr>";
            echo "<td>" . $row['roll_no'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['class'] . "</td>";
            echo "<td>" . $row['contact_no'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No records found</td></tr>";
    }
}
?>
</body>
</html>