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
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/logo.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="help.php">HELP</a></li> 
                    <li><a href="map.php">MAP</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    <h1 style="color:white">WE'RE HERE TO HELP</h1>
    </section>
    <!-- Courses-->
    <section class="course">
        <h1>How to use this website</h1>
        <p></p><BR> Here are some steps to get started with drowsy detector<BR></p>
        <div class="row">
            <div class="course-col">
                <h3>REGISTER/LOGIN</h3>
                <p>1. Tap "Register" to create a new account. <br>2. Enter your Fulllname.<br> 
                    3. Create a username - You can not chnage your username, so choose wisely.
                <br>4. Choose a secure password - We recommend making your password extra strong.<br>
            5. Confirm Password <br> 6. Enter your phone number<br><br> 
            <B>Congratulation! You have Registered Successfully</B><BR><br><B>NOTE:</B> If you are already a Drowsy Detector user, you can simply LogIn into 
                the website using Phone number and Password.<br> <BR> </p>
            </div> 
            <div class="course-col">
                <h3>SCANNING</h3>
                <p><BR><BR><BR>You can start scanning by tapping on "Start Scan" button.</p>
            </div>
            <div class="course-col">
                <h3>MAP</h3>
                <p><BR><BR></B><BR>You can search your destination,navigate to a place,explore,and pick your route prefrences by tapping on "MAP" button.<BR><br><BR><br></B><BR></p>
            </div>
        </div>
    </section>
    <!--facilities-->
    <section class="facilities">
        <h1>How it detects drowsiness? </h1>
        <p></p>Here is an paradigm of how drowsiness is detected after scanning your face</p>
        <div class="row">
            <div class="facilities-col">
                <img src="images/library.jpg">
                <h3>Open Eye Detection</h3>
                <p>The eyes are open,it indicates that the user is active.</p></p>
            </div>
            <div class="facilities-col">
                <img src="images/basketBall.jpg">
                <h3>Closed Eye Detection</h3>
                <p>The eyes are closed, which implies the user is drowsy.</p></p>
            </div>
            <div class="facilities-col">
                <img src="images/cafeteria.jpg">
                <h3>Sleep Alert</h3>
                <p></p>The alarm will beep to alert the user.</p>
            </div>
        </div>
    </section>
</section>
<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h4>For further help,you can contact us<br></h3>
                    <h5>drowsydetector</h5>
                    
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+91 92142356780</h5>
                    <p> You can call us on Monday to Saturday, 10AM to 6PM</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>drowsydetector@gmail.com</h5>
                    <p>You can Email us your query</p>
                </span>
            </div>
        </div>
   
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