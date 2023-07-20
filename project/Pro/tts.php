<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://kit.fontawesome.com/330a618075.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
      <form action="tts.php" method="POST">
        <div class="form-box">
            <h1 id="title">sign up</h1>
            
                <div class="input-group">
                  <div class="input-field" id="namefield">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="name" name="name" required>

                  </div> 
                  <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required>
                    
                  </div> 

                  <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                    
                  </div> 
                  <!-- <p>Forgot password <a href="#">Click Here!</a></p> -->
                </div>
                <div 
                
                class="input-field">
                   <a href="text.php"> <input type="submit" value="signup" class="btn" name="signup"></a>
                 </div>
            </form>
        </div>
    </div>

</body>
</html>

<?php

 if($_POST['signup']){
    $name =  $_POST['name'] ;
    $email = $_POST['email'];
    $password = $_POST['password'];
   // echo '<script > alert("shreya")</script>';
    $query = "INSERT INTO register (name,email,password) VALUES ('$name', '$email', '$password')";
    //echo '<script > alert("shreya123")</script>';
    $data=mysqli_query($conn, $query);
   // echo '<script > alert("shreya345")</script>';
    if($data){
      echo '<script > alert("Data inserted successfully")</script>';
        
       // echo '<script > alert("shreya1")</script>';
       header("Location: http://localhost/TTS/text.php");
       exit;
    }
    else{
      echo '<script > alert("Failed to insert")</script>';
        
        // echo '<script > alert("shreya2")</script>';
    }
    
/* Make sure that code below does not get executed when we redirect. */

 }
?>