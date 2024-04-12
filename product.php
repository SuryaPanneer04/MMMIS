<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="css/web.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>  
        body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
        .c{
            margin-top: -600px;
        }
         h1{
           text-align: center;
         }
         .c1{
            
             font-weight:bold;
             font-size: 25px;
             padding:5px;
              text-align: justify;
             background-color: #B0C5A4;
         } 
         .c2{
             
             text-align: center;
             color: rgb(67, 70, 72);  
         } 
         .c3{
               border:solid;
               width:1000px;
              display: flex;
              flex-direction: row;
              margin-top:3%;
              margin-left:170px;
              border-radius: 5px;
             #img{
              margin-left: 100px;
              /* border:solid; */

             }
             p{
              margin-left:10%;
              font-size: 20px;
             }
             #size{
                margin-left:-24%;
                margin-top:4%;
             }
            }
            .c4{
               
                text-align: center;
            }
         #btn{
   
    margin-left:960px;    
    background-color:blue;
         } 
        
    </style>
</head>
<body>
    
<div class="Section_top">
    <div class="main" >
        <div class="icon">
        <h2 class="logo"><img src="logo-transparent-png.png"></h2>
        <div class="navbar">
            
            <div style="margin-left:800px;"class="menu">
                <ul>
                    <li id="current"style="float: left;margin-left:-100px;"><a href="Home.php">HOME</a></li>
                    <li style="float: left;margin-left:150px;"><a href="product.php">PRODUCT</a></li>
                    <li id="current"style="float: left;margin-left:180px;"><a href="feedback.html">FEEDBACK</a></li>
                    <li style="float: left;margin-left:200px;"><a href="Login.php">LOGIN</a></li>
                  
                </ul>
            </div>
        </div>  
</div> 
        </div>   
    </div>
</div>

<div class="c">
    <div class="c1">
      <p>Mango Safety Matches is made of quality wooden/rubber of outer box and quality duplex board of inner box & Splints are made of perfectly chopped Malabarica, Moringa oleifera, Aspen and Imported splints are optional.
        Like Mango matches means the Mango outer will be pasted with printed label and the side chemical will be painted by brush.
         It is more useful for raining & wet area usages</p>
      <br>
     </div>
     <div class="c2">
      <p><h1>PRODUCT SPECIFICATION</h1></p>
     </div>
     <div class="c3">
      <img src="Matches.jpg" alt="mango" id="img" width="300" height="300">
      <p><h2>Sizes we offer (L x W x H)</h2></p>
     <p id="size"> 49 x 35 x 14 mm<br>
        45 x 34 x 13 mm<br>
        51 x 36 x 14</p>
        <br>
        
     </div>
     <div class="c3">
        <img src="matches-stick.jpg" alt="mango" id="img" width="300" height="300">
        <p><h2>No of Sticks</h2></p>
       <p id="size"> 40 avg<br>
          38 avg<br>
          25 avg</p>
          <br>
     </div>
     <div class="c4">
        <p><h2>PACKING 10’s CARDBOARD MATCHES PACKING</h2></p>
        <img src="10sbox.png" alt="mango" id="img" width="500" height="300"><br><br>
    </div>
    <div class="c4">
        <p><h2>100’s CARDBOARD SAFETY MATCHES PACKING</h2></p>
        <img src="bg2.webp" alt="mango" id="img" width="500" height="300"><br><br>
    </div>
    <div class="c4">
        <p><h2>1000’s CARDBOARD MATCHES PACKING</h2></p>
        <img src="bg3.jpeg" alt="mango" id="img" width="500" height="300">
    </div>
        </div>   
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="container">
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: rgb(63, 63, 241);">Order Here</button>
      
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
                          <h5 class="modal-title" id="exampleModalLabel" style="color: black; text-align: center; font-size: 25px;">Your Details   </h5>
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