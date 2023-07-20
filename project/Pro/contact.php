<?php include("connection.php"); ?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>DROWSINESS DETECTION SYSTEM</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;700&display=swap" 
rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
<form action="contact.php" method="POST">
    <section class="sub-header">
    
        <nav>
            <a href="index.php"></a>
            <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
              
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="help.php">HELP</a></li>
                    <li><a href="contact.php">FEEDBACK</a></li>
                    <li><a href="map.php">MAP</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    <h1 style="color:white">WE VALUE YOUR FEEDBACK!!</h1>
    </section>
    <!--blog page content-->
    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                
                <h2>HOW'S YOUR EXPERIENCE USING DROWSY DETECTOR?</h2>
                <p></p>
            </p>
                        <div class="comment-box">
                            <h3>Leave a comment</h3>
                            <form class="comment-form">
                                <input type="text" placeholder="Enter Name" name="name">
                                <input type="email" placeholder="Enter Email" name="email">
                                <textarea rows="5" placeholder="Your comment" name="comment">
                                </textarea>
                                <div
			class="input-field">
                    <input type="submit" value="post" class="btn" name="post"></a>
               
			</div>
                            </form>
                        </div>
            </div>
 
        </div>
    </section>
    <!--footer-->
    <section class="footer">
      
    </section>
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
</body>
</html>

<?php

if($_POST['Post']){
	$name =  $_POST['name'] ;
    $email = $_POST['email'];
	$comment =  $_POST['comment'] ;
   // echo '<script > alert("shreya")</script>';
    $query = "INSERT INTO feed (name,email,comment) VALUES ('$name', '$email', '$comment')";
    //echo '<script > alert("shreya123")</script>';
    $data=mysqli_query($conn, $query);
   // echo '<script > alert("shreya345")</script>';
    if($data){
       echo '<script > alert("Data inserted successfully")</script>';
        
       // echo '<script > alert("shreya1")</script>';
       
    }
    else{
      echo '<script> alert("invalid")</script>';
    //   header("Location: http://localhost/project/register.php");
    //    exit;
        
        // echo '<script > alert("shreya2")</script>';
    }
    
/* Make sure that code below does not get executed when we redirect. */

 }
?>