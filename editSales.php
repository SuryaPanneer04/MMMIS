<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/s.css">
</head>

<body>
<div class="wrapper">
<?php
     if(isset($_POST['submit']))
     {
       
         $id=$_GET['id'];
        //  $id = $row['pno'];
        $customername = $_POST['customername'];
        $companyname = $_POST['companyname'];
        $product = $_POST['product'];
        $quantity = $_POST['quantity'];
        $pdatetime = $_POST['pdatetime'];
        $amount = $_POST['amount'];
        $gst = $_POST['gst'];
        // include "database.php";
 $conn= mysqli_connect("localhost", "root","", "test");

        $q="UPDATE sales SET customername='".$customername."',companyname='".$companyname."',product='".$product."',quantity='".$quantity."',pdatetime='".$pdatetime."',amount='".$amount."',gst='".$gst."' where pno='".$id."'";
        if($conn->query($q)==TRUE)
        {

        echo "<script>alert('sales Details Updated...');</script>";
     }

    }
    ?>
<?php
 $a=$_GET['id'];
 echo $a;
// Connect to your database
// Example:
 $conn= mysqli_connect("localhost", "root","", "test");
 $str="SELECT * FROM sales WHERE pno=$a";
 $res=mysqli_query($conn, $str);
 while($row=mysqli_fetch_assoc($res))   
                         {
                            $id = $row['pno'];
                            $customername = $row['customername'];
                            $companyname = $row['companyname'];
                            $product = $row['product'];
                            $quantity = $row['quantity'];
                            $pdatetime = $row['pdatetime'];
                            $amount = $row['amount'];
                            $gst = $row['gst'];
                         } ?>

<div class="form"><form action=" " method="post" enctype="multipart/form-data">
<br><br><label id="l1">customername:</label><input type="text" name="customername" value="<?php echo $customername;?>" id="inp" ><br><br>
  <label id="l4">companyname:</label><input type="text" name="companyname" value="<?php echo $companyname;?>" id="inp"><br><br>
  <label id="l2">product:</label><input type="text" name="product" value="<?php echo $product;?>" id="inp"><br><br>
  <label id="l2">quantity:</label><input type="text" name="quantity" value="<?php echo $quantity;?>" id="inp"><br><br>
  <label id="l2">pdatetime:</label><input type="text" name="pdatetime" value="<?php echo $pdatetime;?>" id="inp"><br><br> 
  <label id="l3">amount:</label><input type="text" name="amount" value="<?php echo $amount;?>" id="inp"><br><br>
  <label id="l3">gst:</label><input type="text" name="gst" value="<?php echo $gst;?>" id="inp"><br><br>

  <input type="submit" name="submit" id="sub">
</form>
</div>
            
  </div>
</body>
</html>