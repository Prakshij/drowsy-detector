<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="signin.css">
    <script src="https://kit.fontawesome.com/330a618075.js" crossorigin="anonymous"></script>
</head>
<body>


    <div class="container">
        <div class="form-box">
            <h1 id="title">sign In</h1>
            <form action="signin.php" method="post">
                <div class="input-group">
                  <div class="input-field" id="namefield">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="name" name="name">

                  </div> 
                  <div class="input-field">
                    
                    
                  </div> 

                  <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="password" name="password">
                    
                  </div> 
                  <p>Forgot password <a href="#">Click Here!</a></p> 
                </div>
                <div class="input-field">
                    <a href="search.php"><input type="submit" value="signin" class="btn" name="signin"></a>
                    
                </div>
            </form>
        </div>
    </div>

    <!-- <script>
     let signupbtn =document.getElementById("signupbtn");
     let signinbtn =document.getElementById("signinbtn");
     let namefield =document.getElementById("namefield");
     let title =document.getElementById("title");


     signinbtn.onclick=function()
     {
        namefield.style.maxHeight="0";
        title.innerHTML="Sign In";
        signupbtn.classList.add("disable");
        signinbtn.classList.remove("disable");

     }
     signupbtn.onclick=function()
     {
        namefield.style.maxHeight="60px";
        title.innerHTML="Sign Up";
        signupbtn.classList.remove("disable");
        signinbtn.classList.add("disable");

     }



    </script> -->
</body>
</html>

<?php

if (isset($_POST['signin'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "select * from users where username = '$username' and password = '$password'";  
  $result = mysqli_query($conn, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);  
  
  if($count == 1){  
      header("Location: http://localhost/project/register.php");
      exit;
  }  
  else{  
      echo  '<script>
                  alert("Login failed. Invalid username or password!!")
              </script>';
  }     
}
 ?> 