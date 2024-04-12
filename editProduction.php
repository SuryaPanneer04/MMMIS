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
        $empno = $_POST['empno'];
        $empName = $_POST['empName'];
        $gross=$_POST['gross'];
        $bundlemadipu = $_POST['bundlemadipu'];
        $packages = $_POST['packages'];
        $productiondate = $_POST['productiondate'];
        // include "database.php";
 $conn= mysqli_connect("localhost", "root","", "test");

        $q="UPDATE production SET empno='".$empno."',empName='".$empName."',gross='".$gross."',bundlemadipu='".$bundlemadipu."',packages='".$packages."',productiondate='".$productiondate."' where pno='".$id."'";
        if($conn->query($q)==TRUE)
        {

        echo "<script>alert('production Details Updated...');</script>";
     }

    }
    ?>
<?php
 $a=$_GET['id'];
 echo $a;
// Connect to your database
// Example:
 $conn= mysqli_connect("localhost", "root","", "test");
 $str="SELECT * FROM production WHERE pno=$a";
 $res=mysqli_query($conn, $str);
 while($row=mysqli_fetch_assoc($res))   
                         {
                            $id = $row['pno'];
                            $empno = $row['empno'];
                            $empName = $row['empName'];
                            $gross=$row['gross'];
                            $bundlemadipu = $row['bundlemadipu'];
                            $packages = $row['packages'];
                            $productiondate = $row['productiondate'];
                         } ?>

<div class="form"><form action=" " method="post" enctype="multipart/form-data">
<br><br><label id="l1">empno:</label><input type="text" name="empno" value="<?php echo $empno;?>" id="inp" ><br><br>
  <label id="l3">EmpName:</label><input type="text" name="empName" value="<?php echo $empName;?>" id="inp"><br><br>
  <label id="l4">Gross:</label><input type="text" name="gross" value="<?php echo $gross;?>" id="inp"><br><br>
  <label id="l2">Bundlemadipu:</label><input type="text" name="bundlemadipu" value="<?php echo $bundlemadipu;?>" id="inp"><br><br>
  <label id="l2">packages:</label><input type="text" name="packages" value="<?php echo $packages;?>" id="inp"><br><br>
  <label id="l2">productiondate:</label><input type="text" name="productiondate" value="<?php echo $productiondate;?>" id="inp"><br><br> 
  <input type="submit" name="submit" id="sub">
</form>
</div>
            
  </div>
</body>
</html>