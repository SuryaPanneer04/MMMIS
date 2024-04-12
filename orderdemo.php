<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="container">
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: rgb(63, 63, 241);">Add Customer orders</button>
      
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form accept="" method="post" action="customerorderform.php">
                          <h5 class="modal-title" id="exampleModalLabel" style="color: black; text-align: center; font-size: 25px;">Add Customer Orders </h5>
                          <div class="modal-body">
                              <div class="">
                                  <label id="l1" style="color: black;">No</label>
                                  <input type="text" name="pno" class="form-control" placeholder="Enter NO">
                              </div>
                              <div class="form">
                                  <label id="l2" style="color: black;">Customer Name</label>
                                  <input type="text" name="customername" class="form-control" placeholder="Enter customer name">
                              </div>
                              <div class="form">
                                  <label id="l3" style="color: black;">Company Name</label>
                                  <input type="text" name="companyname" class="form-control" placeholder="Enter Company Name ">
                              </div>
                              <div class="form">
                                <label id="l6" style="color: black;">MobileNo</label>
                                <input type="text" name="mobileno" class="form-control" placeholder="Enter MobileNo">
                            </div>
                              <div class="form">
                                <label id="l5" style="color: black;">Address</label>
                                <input type="text" name="paddress" class="form-control" placeholder="Enter Address">
                            </div>
                            <div class="form">
                                <label id="l6" style="color: black;">Order Date</label>
                                <input type="date" name="orderdate" class="form-control" placeholder="Enter Order Date">
                            </div>
                            <div class="form">
                                <label id="l7" style="color: black;">Product</label>
                                <input type="text" name="product" class="form-control" placeholder="Enter Product">
                            </div>
                            <div class="form">
                                <label id="l8" style="color: black;">Quantity</label>
                                <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity">
                            </div>
                            <div class="form">
                                <label id="l8" style="color: black;">Imported</label>
                                <input type="text" name="imported" class="form-control" placeholder="Enter Imported">
                            </div>

                              <input type="hidden" name="Username" value="admin">
                          </div>
                          <div class="modal-footer">
                            <button style="color: rgb(244, 241, 241) !important;background-color: rgb(63, 63, 241);  " id="btn2"type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                          </div>
                      </form>   
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="color: black;">Close</button>
              </div>
            </div>
            
          </div>
        </div>
        
      </div>
      
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
</div>
<!-- End of Content Wrapper -->
<!-- start table Wrapper -->
<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "test"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM customerorder;";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
echo "<table class='table table-striped table-hover'>";
echo "<thead style='color: white !important;background-color: rgb(27, 26, 26) !important;'>";
echo "<tr>";
echo "<th>No</th>";
echo "<th>Customer Name</th>";
echo "<th>Company Name</th>";
echo "<th>Mobile NO</th>";
echo "<th>Address</th>";    
echo "<th>OrderDate</th>";
echo "<th>Product</th>";  
echo "<th>Quantity</th>";
echo "<th>Imported</th>";
echo "<th>Edit</th>";
echo "<th>Delete</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody style='color: black !important;'>";
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>" . $row["pno"] . "</td> ";
echo "<td>" . $row["customername"] . "</td> ";
echo "<td>". $row["companyname"] . "</td>";
echo "<td>". $row["mobileno"] . "</td>";
echo "<td>". $row["paddress"] . "</td>";
echo "<td>". $row["orderdate"] . "</td>";
echo "<td>". $row["product"] . "</td>";
echo "<td>". $row["quantity"] . "</td>";
echo "<td>". $row["imported"] . "</td>";
echo "<td><button>Edit</button></td>";
echo "<td><button >Delete</button></td>";
echo "</tr>";
}
echo "</tbody>";
echo "</table>";
} else {
echo "0 results";
}

$conn->close();
?>

</div>
<!-- End of Page Wrapper -->
 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>