<!DOCTYPE html>
<html lang="en">
<head>
    <title>SMC website</title>
    <link rel="stylesheet" href="css/web.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <style>
        body,html{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    font-family: sans-serif;
}
       .Section_top{
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    background-image: url(bg0.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    justify-content: center;
    animation: change 10s infinite ease-in-out;
    
}
@keyframes change{
    0%
    {
        background-image: url(bg6.jpg);
    }
    20%
    {
        background-image: url(bg2.webp);
    }
    40%
    {
        background-image: url(bg3.jpeg);
    }
    60%
    {
        background-image: url(bg4.jpeg);
    }
    80%
    {
        background-image: url(bg5.jpg);
    }
    100%
    {
        background-image: url(bg0.jpg);
    }
}

        
    </style>
</head>
<body>
    <div class="Section_top">
    <div class="main" >
        <div class="icon">
        <h2 class="logo"><img src="logo-transparent-png.png"></h2>
        <div class="navbar">
            
            <div class="menu">
                <ul>
                    <li id="current"style="float: left;margin-left:-100px;"><a href="#">HOME</a></li>
                    <li style="float: left;margin-left:150px;"><a href="product.php">PRODUCT</a></li>
                    <li id="current"style="float: left;margin-left:180px;"><a href="feedback.html">FEEDBACK</a></li>
                    <li style="float: left;margin-left:200px;"><a href="Login.php">LOGIN</a></li>
                  
                </ul>
            </div>
        </div>  
</div> 
        <h1>Welcome</h1>
    </div>
    <div class="h1"><h1>MMMIS</h1></div>
</div>
<section class="footer">
<hr>
<h1>Contact Us</h1>
<br><br>
   <div class="box-container">
      <div class="box">
         <br><br><h3>quick links</h3>
         <a href="Home.php">Home</a>
         <a href="login.php">Login</a>
      </div>

      <div class="box">
      <br><br><h3>Headquarters</h3>
        <p>Mithran matchworks<br>
           RR-Nagar </p>
      </div>

      <div class="box">
      <br><br><h3>contact info</h3>
         <p> <i class="fas fa-phone"></i> 9384178442 </p>
         <p> <i class="fas fa-phone"></i> 9384178224</p>
         <p> <i class="fas fa-envelope"></i> mithranmatchworks@gmail.com</p>
      </div>

      <div class="box">
      <br><br><h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>



</section>
</body>
</html>