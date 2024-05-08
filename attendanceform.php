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
$empno = $_POST['empno'];
$attendancedate = $_POST['attendancedate'];
$checkin = $_POST['checkin'];
$checkout= $_POST['checkout'];
$sql = "INSERT INTO attendance (empno,attendancedate,checkin,checkout) VALUES ('$empno','$attendancedate','$checkin','$checkout')";
    if ($conn->query($sql) === TRUE) {
        echo "User Saved <a href='./Attendance1.php'>View Here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
