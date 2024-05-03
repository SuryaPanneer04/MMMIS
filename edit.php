<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/edit.css">
</head>

<body>
<div class="wrapper">
<?php
     if(isset($_POST['submit']))
     {
       
         $id=$_GET['id'];
        //  $id = $_POST['pno'];
        $pname = $_POST['pname'];
        $paddress = $_POST['paddress'];
        $town = $_POST['town'];
        $pstate=$_POST['pstate'];
        $companyname=$_POST['companyname'];
        $mobileno=$_POST['mobileno'];
        $email=$_POST['email'];
        // include "database.php";
 $conn= mysqli_connect("localhost", "root","", "test");

        $q="UPDATE customer SET pname='".$pname."',paddress='".$paddress."',town='".$town."',pstate='".$pstate."',companyname='".$companyname."',mobileno='".$mobileno."',email='".$email."' where pno='".$id."'";
        if($conn->query($q)==TRUE)
        {

        echo "<script>alert('Products Details Updated...');</script>";
     }

    }
    ?>
<?php
 $a=$_GET['id'];
 echo $a;
// Connect to your database
// Example:
 $conn= mysqli_connect("localhost", "root","", "test");
 $str="SELECT * FROM customer WHERE pno=$a";
 $res=mysqli_query($conn, $str);
 while($row=mysqli_fetch_assoc($res))
                         {
                             $id = $row['pno'];
                             $pname = $row['pname'];
                             $paddress = $row['paddress'];
                             $town = $row['town'];
                             $pstate=$row['pstate'];
                             $companyname=$row['companyname'];
                             $mobileno=$row['mobileno'];
                             $email=$row['email'];
                         } ?>

<div class="form"><form action=" " method="post" enctype="multipart/form-data">
<br><br><label id="l1">Name:</label><input type="text" name="pname" value="<?php echo $pname;?>" id="inp" ><br><br>
  <label id="l2">Address:</label><input type="text" name="paddress" value="<?php echo $paddress;?>" id="inp"><br><br>
  <label id="l3">Town:</label><input type="text" name="town" value="<?php echo $town;?>" id="inp"><br><br>
  <label id="l4">State:</label><input type="text" name="pstate" value="<?php echo $pstate;?>" id="inp"><br><br>
  <label id="l9">Companyname :</label><input type="text" name="companyname" value="<?php echo $companyname;?>" id="inp"><br><br>
  <label id="l9">Mobile No :</label><input type="text" name="mobileno" value="<?php echo $mobileno;?>" id="inp"><br><br>
  <label id="l9">E-mail :</label><input type="text" name="email" value="<?php echo $email;?>" id="inp"><br><br>
        <input type="submit" name="submit" id="sub">
</form>
</div>
            
                        </div>
</body>
</html>