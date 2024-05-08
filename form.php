<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "test"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $pno = $_POST['pno'];
$pname = $_POST['pname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$paddress = $_POST['paddress'];
$sql = "INSERT INTO employee (pname,age,gender,paddress) VALUES ('$pname','$age','$gender','$paddress')";
    if ($conn->query($sql) === TRUE) {
        echo "User Saved <a href='./employee1.php'>View Here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
