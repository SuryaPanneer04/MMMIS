<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "test"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$pno = $_POST['pno'];
$empno = $_POST['empno'];
$gross = $_POST['gross'];
$bundlemadipu = $_POST['bundlemadipu'];
$packages = $_POST['packages'];
$workingdays = $_POST['workingdays'];
$totalamount = $_POST['totalamount'];
$sql = "INSERT INTO salary (pno,empno,gross,bundlemadipu,packages,workingdays,totalamount) VALUES ('$pno','$empno','$gross','$bundlemadipu','$packages','$workingdays','$totalamount')";
    if ($conn->query($sql) === TRUE) {
        echo "User Saved <a href='./Salary1.php'>View Here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
