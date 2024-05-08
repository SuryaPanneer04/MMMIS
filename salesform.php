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
$customername = $_POST['customername'];
$companyname= $_POST['companyname'];
$product= $_POST['product'];
$quantity= $_POST['quantity'];
$pdatetime = $_POST['pdatetime'];
$amount = $_POST['amount'];
$gst = $_POST['gst'];

$sql = "INSERT INTO sales (customername,companyname,product,quantity,pdatetime,amount,gst) VALUES ('$customername','$companyname','$product','$quantity','$pdatetime','$amount','$gst')";
    if ($conn->query($sql) === TRUE) {
        echo "User Saved <a href='./Sales.php'>View Here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
