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
        $pname = $_POST['pname'];
        $age = $_POST['age'];
        $gender=$_POST['gender'];
        $paddress = $_POST['paddress'];
        
        // include "database.php";
 $conn= mysqli_connect("localhost", "root","", "test");

        $q="UPDATE employee SET pname='".$pname."',age='".$age."',gender='".$gender."',paddress='".$paddress."' where pno='".$id."'";
        if($conn->query($q)==TRUE)
        {

        echo "<script>alert('employee Details Updated...');</script>";
     }

    }
    ?>
<?php
 $a=$_GET['id'];
 echo $a;
// Connect to your database
// Example:
 $conn= mysqli_connect("localhost", "root","", "test");
 $str="SELECT * FROM employee WHERE pno=$a";
 $res=mysqli_query($conn, $str);
 while($row=mysqli_fetch_assoc($res))   
                         {
                            $id = $row['pno'];
                            $pname = $row['pname'];
                            $age = $row['age'];
                            $gender=$row['gender'];
                            $paddress = $row['paddress'];
                         } ?>

<div class="form"><form action=" " method="post" enctype="multipart/form-data">
<br><br><label id="l1">Name:</label><input type="text" name="pname" value="<?php echo $pname;?>" id="inp" ><br><br>
  <label id="l3">Age:</label><input type="text" name="age" value="<?php echo $age;?>" id="inp"><br><br>
  <label id="l4">Gender:</label><input type="text" name="gender" value="<?php echo $gender;?>" id="inp"><br><br>
  <label id="l2">Address:</label><input type="text" name="paddress" value="<?php echo $paddress;?>" id="inp"><br><br>
        <input type="submit" name="submit" id="sub">
</form>
</div>
            
  </div>
</body>
</html>