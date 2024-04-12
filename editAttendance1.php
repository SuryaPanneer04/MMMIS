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
        $attendancedate = $_POST['attendancedate'];
        $checkin=$_POST['checkin'];
        $checkout = $_POST['checkout'];
        // include "database.php";
 $conn= mysqli_connect("localhost", "root","", "test");

        $q="UPDATE attendance SET empno='".$empno."',attendancedate='".$attendancedate."',checkin='".$checkin."',checkout='".$checkout."' where pno='".$id."'";
        if($conn->query($q)==TRUE)
        {

        echo "<script>alert('attendance Details Updated...');</script>";
     }

    }
    ?>
<?php
 $a=$_GET['id'];
 echo $a;
// Connect to your database
// Example:
 $conn= mysqli_connect("localhost", "root","", "test");
 $str="SELECT * FROM attendance WHERE pno=$a";
 $res=mysqli_query($conn, $str);
 while($row=mysqli_fetch_assoc($res))   
                         {
                            $id = $row['pno'];
                            $empno = $row['empno'];
                            $attendancedate = $row['attendancedate'];
                            $checkin=$row['checkin'];
                            $checkout = $row['checkout'];
                         } ?>

<div class="form"><form action=" " method="post" enctype="multipart/form-data">
<br><br><label id="l1">Empno:</label><input type="text" name="empno" value="<?php echo $empno;?>" id="inp" ><br><br>
  <label id="l3">Attendancedate:</label><input type="text" name="attendancedate" value="<?php echo $attendancedate;?>" id="inp"><br><br>
  <label id="l4">Checkin:</label><input type="text" name="checkin" value="<?php echo $checkin;?>" id="inp"><br><br>
  <label id="l2">checkout:</label><input type="text" name="checkout" value="<?php echo $checkout;?>" id="inp"><br><br>
  
  <input type="submit" name="submit" id="sub">
</form>
</div>
            
  </div>
</body>
</html>