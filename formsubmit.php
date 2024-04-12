<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "test"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username_user = $_POST['username'];
$password_user = $_POST['password'];
$usertype = $_POST['usertype'];
$email = $_POST['email'];
$sql = "INSERT INTO users (username,email,usertype,password) VALUES ('$username_user','$email','$usertype','$password_user')";
    if ($conn->query($sql) === TRUE) {
        echo "User Saved <a href='./UserDetails.php'>View Here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }   
?>


