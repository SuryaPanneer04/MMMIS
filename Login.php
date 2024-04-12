<!DOCTYPE php>
<php lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form </title>
  <link rel="stylesheet" href="css/s.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script>
    function  check_info()
    
    {
    
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    
        if(username == "manager" && password == "123456")
    
          {
            alert("Login Successful");
            window.location.replace("manager.php");
            return false;
          }

          
          if(username == "admin" && password == "1234")
    
          {
            alert("Login Successful");
            window.location.replace("index.php");
            return false;
          }
    
          else
          { 
            alert("check username and password"); 
          }
    
      } 
    </script>
</head>
<body>
  <div class="wrapper">
    <form action="" onclick="return check_info()";>
      <h1>LOGIN</h1>
      <div class="input-box">
        <input type="text" placeholder="username" required id="username">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="password" required id="password">
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</body>
</php>