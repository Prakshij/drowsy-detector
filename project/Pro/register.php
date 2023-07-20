<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>DROWSINESS DETECTION SYSTEM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;700&display=swap" 
rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<style>
    *{
        box-sizing: border-box;
        border-radius: 20px;
        
    }
    body{
        margin: 0;
        padding: 0;
        background-color: #ced3e7;
        font-family: 'Montserrat' , sans-serif;
    }
    input{
        outline: none;
        border: #9598a0;
    }
    .heading{
        width: 60%;
    }
    .heading h1{
        font-size: 2rem;
        font-weight: 600;
        color: black;
    }
    .container{
        width: 100%;
        position: absolute;
        left: 50%;
        top: 53%;
        transform: translate(-50%,-50%);
        height: 90vh;
        background-color: #f8f9f8;
        display: flex ;
        box-shadow: 5px 10px 38px rgba(0,0,0,0.2);
    }
    
    .form{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 200%;
    }
    .image{
        width: 130%;
    }
    .img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .wrap2{
        width: 80%;
        position: relative;
        border-bottom: 2px solid #b2b2b2;
        margin-bottom: 13px;
    }
    .wrap{
        display: flex;
        width: 80%;
        justify-content: center;
    }
    .f1{
        border-bottom: 2px solid #b2b2b2;
        width: 100%;
        position: relative;
    }
    .f2{
        border-bottom: 2px solid #b2b2b2;
        margin-left: auto;
        width: 50%;
        position: relative;
    }
    label{
        font-size: 12px;
        color: #676768;
        line-height: 1.5;
        text-transform: uppercase;
        letter-spacing: 1px;
        display: flex;
        align-items: center;
        width: 80%;
        min-height: 25px;
        border-bottom: none;
        padding: 15px 0px;
        margin-top: -10px;
        margin-bottom: 0px;
        padding-bottom: 2px;
    }
    input{
        display: block;
        width: 100%;
        font-size: 18px;
        background: transparent;
        color: #0f0f0f;
        font-weight: 500;
        padding: 0px 0px;
    }
    .btn{
            border: none;
            outline: none;
            height: 50px;
            width: 50%;
            background-color: black;
            color: #fff;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn:hover{
            background: white;
            border: 1px solid;
            color: black;
        }
    
    .focus-input{
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none ;
    }
    .focus-input::before{
        content: "";
        display: block;
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 0;
        height: 2px;
        transition: all 0.6s;
        background: #412277;
    }
    .focus-input + .focus-input::before{
        width: 100%;
    }
    .has-val.input + .focus-input::before{
        width: 100%;
    }
    input[type="number"]
    {
        overflow: hidden;
    }
    /***********RESPONSIVE**************/
    @media(max-width:1250px)
    {
        .container{
            width: -90%;
        }
    }
    @media(max-width:768px){
        .container{
            width: 100%;
            height: 100vh !important;
            position: static;
            transform: translate(0,0);
        }
    }
    @media(max-width:1000px){
        .image{
            display: none;
        }
        
    }
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 16px 17px;
    position: relative;
}
.nav-links ul li a{
    color: black;
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
    <form action="register.php" method="POST">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="help.php">HELP</a></li>
            <li><a href="map.php">MAP</a></li>
        </ul>
    </div>





    <div class="container">
      
        <div class="form">
            <div class="heading">
                <h1>Register Here</h1>
            </div>
            <!--form-->
            <div class="wrap">
                <div class="f1">
                    <label>Full Name</label>
                    <input type="text" name="fullname" required/>
                    <span class="focus-input"></span>
                </div>
                
            </div>
            <div class="wrap2">
                <label>Username</label>
                <input type="text" name="username" required>
                <span class="focus-input2"></span>
            </div>
            <div class="wrap2">
                <label>E-Mail</label>
                <input type="text" name="email" required>
                <span class="focus-input2"></span>
            </div>
            <div class="wrap2">
                <label>Password</label>
                <input type="password" name="password_1" required>
                <span class="focus-input2"></span>
            </div>
            <div class="wrap2">
                <label>Confirm Pasword</label>
                <input type="password" name="password_2" required>
                <span class="focus-input2"></span>
            </div>
            <div class="wrap2">
                <label>Phone Number</label>
                <input type="numbers" name="phonenumber" required>
                <span class="focus-input2"></span>
            </div>
            <!-- <button class="btn">Register</button> -->
			<div
			class="input-field">
                   <a href="scan.php"> <input type="submit" value="signup" class="btn" name="signup"></a>
               
			</div>

            <p>Already have an account?     <a href="login.php" >Login here</a></p>
        </div>
        <!--image-->
        <div class="image">
            <img src="images/HII2.jpg" class="img" alt=""/>
        </div>
    </div>





<!--- ------Javascript for Toggle Menu------ --->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
                navLinks.style.right = "0";
        }
        function hideMenu(){
                navLinks.style.right = "-200px";
        }
    </script>
    </form>
</body>
</html>

<?php

if($_POST['signup']){
	$fullname =  $_POST['fullname'] ;
    $username =  $_POST['username'] ;
    $email = $_POST['email'];
	$password =  $_POST['password_1'] ;
    $confirmpassword = $_POST['password_2'];
	$phonenumber = $_POST['phonenumber'];
   // echo '<script > alert("shreya")</script>';
    $query = "INSERT INTO users (fullname,username,email,password_1,password_2,phonenumber) VALUES ('$fullname','$username', '$email', '$password','$confirmpassword','$phonenumber')";
    //echo '<script > alert("shreya123")</script>';
    $data=mysqli_query($conn, $query);
   // echo '<script > alert("shreya345")</script>';
    if($data){
       echo '<script > alert("Data inserted successfully")</script>';
        
       // echo '<script > alert("shreya1")</script>';
       header("Location: http://localhost/project/scan.php");
       exit;
    }
    else{
      echo '<script> alert("already registered")</script>';
    //   header("Location: http://localhost/project/register.php");
    //    exit;
        
        // echo '<script > alert("shreya2")</script>';
    }
    
/* Make sure that code below does not get executed when we redirect. */

 }
?>