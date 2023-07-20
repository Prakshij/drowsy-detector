<?php include("connection.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: rgba(219, 226, 226)
        }
        .row{
            background: #fff;
            border-radius: 30px;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: #fff;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background: white;
            border: 1px solid;
            color: black;
        }
        nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
}
nav img{   
    width: 50px;
}
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a{
    color: rgb(5, 5, 5);
    font-weight: bold;
    text-decoration: none;
}
.nav-links ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #f44336;
    display: block;
    margin: auto;
    transition: 0.5s;
}
.nav-links ul li:hover::after{
    width: 100%;
}
    </style>
  </head>
  <body>


    <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <form action="login.php" method="POST">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="help.php">HELP</a></li>
            <li><a href="map.php">MAP</a></li>
        </ul>
    </div>
    <section class="Form my-4 mx-5">
        <div class="Container">
            
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="images/HII.jpg" class="img-fluid" alt="" height= "150" width="268">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Login</h1>
                    <h4>Sign into your account</h4>
                    <!-- <form> -->
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="phone number" placeholder="Phone Number" class="form-control my-3 p-4" name="phonenumber">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="******" class="form-control" name="password_1">
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- <div class="col-lg-7"> -->
                                <div class ="input-field">
                   <a href="scan.php"><input type="submit" value="login" class="btn" name="login"></a>
               
			<!-- </div> -->
                            </div>
                        </div>
                        <p>Ready To Scan?   <a href="scan.php" class="hero-btn">Click Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

<script language="javascript">
function BOK()
{
document.getElementById("phonenumber").value="";
document.getElementById("password").value="";
}
</script>
</head>
</body>
</html>
<?php

if (isset($_POST['login'])) {
  $phonenumber = $_POST['phonenumber'];
  $password = $_POST['password_1'];

  $sql = "select * from users where phonenumber = '$phonenumber' and password_1 = '$password'";  
  $result = mysqli_query($conn, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
  $count = mysqli_num_rows($result);  
  
  if($count == 1){  
    echo  '<script>
                  alert("Login successfully")
              </script>';
      header("Location: http://localhost/project/scan.php");
      exit;
  }  
  else{  
      echo  '<script>
                  alert("Login failed. Invalid username or password!!")
              </script>';
  }     
}
 ?> 
 