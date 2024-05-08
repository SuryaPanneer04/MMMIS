<?php
// Include your database connection file or code here

// Check if the delete request was sent
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Get the ID of the record to delete
    $idToDelete = $_GET['id'];

    // Delete the record from the database
    $sql = "DELETE FROM attendance WHERE pno = $idToDelete";
    $conn= mysqli_connect("localhost", "root","", "test");
    
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the page where the delete button was clicked
        header("Location: Attendance1.php");
        exit();
    } else {
        // Handle the error
        echo "Error deleting record: " . $conn->error;
    }
}
?>
