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
        $gross = $_POST['gross'];
        $bundlemadipu = $_POST['bundlemadipu'];
        $packages = $_POST['packages'];
        $workingdays = $_POST['workingdays'];
        $totalamount = $_POST['totalamount'];
        // include "database.php";
 $conn= mysqli_connect("localhost", "root","", "test");

        $q="UPDATE salary SET empno='".$empno."',gross='".$gross."',bundlemadipu='".$bundlemadipu."',packages='".$packages."',workingdays='".$workingdays."',totalamount='".$totalamount."' where pno='".$id."'";
        if($conn->query($q)==TRUE)
        {

        echo "<script>alert('salary Details Updated...');</script>";
     }

    }
    ?>
<?php
 $a=$_GET['id'];
 echo $a;
// Connect to your database
// Example:
 $conn= mysqli_connect("localhost", "root","", "test");
 $str="SELECT * FROM salary WHERE pno=$a";
 $res=mysqli_query($conn, $str);
 while($row=mysqli_fetch_assoc($res))   
                         {
                            $id = $row['pno'];
                            $empno = $row['empno'];
                            $gross = $row['gross'];
                            $bundlemadipu = $row['bundlemadipu'];
                            $packages = $row['packages'];
                            $workingdays = $row['workingdays'];
                            $totalamount = $row['totalamount'];
                         } ?>

<div class="form"><form action=" " method="post" enctype="multipart/form-data">
<br><br><label id="l1">empno:</label><input type="text" name="empno" value="<?php echo $empno;?>" id="inp" ><br><br>
  <label id="l4">Gross:</label><input type="text" name="gross" value="<?php echo $gross;?>" id="inp"><br><br>
  <label id="l2">Bundlemadipu:</label><input type="text" name="bundlemadipu" value="<?php echo $bundlemadipu;?>" id="inp"><br><br>
  <label id="l2">packages:</label><input type="text" name="packages" value="<?php echo $packages;?>" id="inp"><br><br>
  <label id="l2">workingdays:</label><input type="text" name="workingdays" value="<?php echo $workingdays;?>" id="inp"><br><br> 
  <label id="l3">totalamount:</label><input type="text" name="totalamount" value="<?php echo $totalamount;?>" id="inp"><br><br>

  <input type="submit" name="submit" id="sub">
</form>
</div>
            
  </div>
</body>
</html>