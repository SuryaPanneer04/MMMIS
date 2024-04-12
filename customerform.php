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
$pname = $_POST['pname'];
$paddress = $_POST['paddress'];
$town = $_POST['town'];
$pstate= $_POST['pstate'];
$companyname= $_POST['companyname'];
$mobileno = $_POST['mobileno'];
$email = $_POST['email'];

$sql = "INSERT INTO customer (pno,pname,paddress,town,pstate,companyname,mobileno,email) VALUES ('$pno','$pname','$paddress','$town','$pstate','$companyname','$mobileno','$email')";
    if ($conn->query($sql) === TRUE) {
        echo "User Saved <a href='./Customer.php'>View Here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
