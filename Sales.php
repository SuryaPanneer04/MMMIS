<!DOCTYPE php>
<php lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMC - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
     <style>#current{background-color: rgb(63, 63, 241);}</style>
    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MMMIS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="UserDetails.php">
                    <span>User Details</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="employee.php">
                    <span>Employee Details</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="customer.php">
                    <span>Customer Details</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="ViewProductionDetails.php">
                   <span>Production Details</span></a>
            </li>
            <li class="nav-item active" >
                <a class="nav-link" href="viewCustomerOrder.php">
                   <span>ViewCustomer orders</span></a>
            </li>    
            <li class="nav-item active"  id="current">
                <a class="nav-link" href="Sales.php">
                   <span> Sales</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="EmpAttendance.php">
                   <span>ViewAttendance</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="EmpSalary.php">
                   <span>ViewSalary</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="viewFeedback.php">
                   <span>ViewFeedback</span></a>
            </li>             
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Surya</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="Home.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div class="container">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: rgb(63, 63, 241);">Add SalesDetails</button>
                          
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                              
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <form accept="" method="post" action="salesform.php">
                                              <h5 class="modal-title" id="exampleModalLabel" style="color: black; text-align: center; font-size: 25px;">Add SalesDetails </h5>
                                              <div class="modal-body">
                                                  <!-- <div class="">
                                                      <label id="l1" style="color: black;">No</label>
                                                      <input type="text" name="pno" class="form-control" placeholder="Enter NO">
                                                  </div> -->
                                                  <div class="form">
                                                      <label id="l2" style="color: black;">Customer Name</label>
                                                      <input type="text" name="customername" class="form-control" placeholder="Enter customer name">
                                                  </div>
                                                  <div class="form">
                                                      <label id="l3" style="color: black;">Company Name</label>
                                                      <input type="text" name="companyname" class="form-control" placeholder="Enter Company Name ">
                                                  </div>
                                                <div class="form">
                                                    <label id="l7" style="color: black;">Product</label>
                                                    <input type="text" name="product" class="form-control" placeholder="Enter Product">
                                                </div>
                                                <div class="form">
                                                    <label id="l8" style="color: black;">Quantity</label>
                                                    <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity">
                                                </div>
                                                <div class="form">
                                                    <label id="l6" style="color: black;">Date & Time</label>
                                                    <input type="datetime-local" name="pdatetime"class="form-control" placeholder="Enter Date & Time">
                                                </div>
                                                <div class="form">
                                                    <label id="l8" style="color: black;">Amount</label>
                                                    <input type="text" name="amount" class="form-control" placeholder="Enter Amount">
                                                </div>
                                                <div class="form">
                                                    <label id="l6" style="color: black;">GST</label>
                                                    <input type="text" name="gst" class="form-control" placeholder="Enter GST">
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
$query = "SELECT * FROM sales;";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
     echo "<table class='table table-striped table-hover'>";
        echo "<thead style='color: white !important;background-color: rgb(27, 26, 26) !important;'>";
        echo "<tr>";
        echo "<th>No</th>";
        echo "<th>Customer Name</th>";
        echo "<th>Company Name</th>";;
        echo "<th>Product</th>";  
        echo "<th>Quantity</th>";
        echo "<th>Date & Time</th>";
        echo "<th>Amount</th>";
        echo "<th>GST</th>";
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
        echo "<td>". $row["product"] . "</td>";
        echo "<td>". $row["quantity"] . "</td>";
        echo "<td>". $row["pdatetime"] . "</td>";
        echo "<td>". $row["amount"] . "</td>";
        echo "<td>". $row["gst"] . "</td>";
        echo "<td><a href='editSales.php?id=" . $row['pno'] . "' class='btn btn-primary'>Edit</a></td>";
        
        // Add a "Delete" button/link
        echo "<td><a href='deleteSales.php?id=" . $row['pno'] . "' class='btn btn-danger'>Delete</a></td>";
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session and go to home page</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="Home.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
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

</php>