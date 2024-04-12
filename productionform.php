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
$empName = $_POST['empName'];
$gross = $_POST['gross'];
$bundlemadipu = $_POST['bundlemadipu'];
$packages = $_POST['packages'];
$productiondate = $_POST['productiondate'];
$sql = "INSERT INTO production (pno,empno,empName,gross,bundlemadipu,packages,productiondate) VALUES ('$pno','$empno','$empName','$gross','$bundlemadipu','$packages','$productiondate')";
    if ($conn->query($sql) === TRUE) {
        echo "User Saved <a href='./Production.php'>View Here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
