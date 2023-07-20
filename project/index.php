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
    <section class="header">
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
    <div class="text-box">
        <h1>DROWSY DETECTOR</h1>
        <p></p><b>Let's drive safe!</b><br>Love Safety, Marry Rules, Divorce Speed</p>
            
            <a href="register.php" class="hero-btn">Register Here</a>
    </div>
    </section>
    <!-- Course-->
    <section class="campus">
        <h1>
            How to use this website?
        </h1>
        <p></p>Save Life, Save Journey</p>
        <div class="row">
            <div class="campus-col">
                <img src="images/front.png.jpg">
                
                <div class="layer">
                    <h3>REGISTER/LOGIN</h3>
                </div>
                
            </div>
            <div class="campus-col">
                <img src="images/middle.png.jpg">
                <div class="layer">
                    <h3>SCAN</h3>
                </div>
                
            </div>
            <div class="campus-col">
                <img src="images/last.png.jpg">
                <div class="layer">
                    <h3>MAP</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="course"> 
        <p></p><B>Welcome to Drowsy Detector, Here are the basics to get you started.</B></p>
        
        <div class="row">
            <div class="course-col">
                <h3>REGISTER/LOGIN</h3>
                <p>1. Tap "Register" to create a new account. <br>2. Enter your Fulllname.<br> 
                    3. Create a username - You can not chnage your username, so choose wisely.
                <br>4. Choose a secure password - We recommend making your password extra strong.<br>
            5. Confirm Password <br> 6. Enter your phone number<br><br> 
            <B>Congratulation! You have Registered Successfully</B>
        <BR><br><B>NOTE:</B> If you are already a Drowsy Detector user, you can simply LogIn into 
        the website using Phone number and Password.<br> <BR></p>
            </div> 
            <div class="course-col">
                <h3>SCANNING</h3>
                <p><BR><BR><BR><br>You can start scanning by tapping on "Start Scanning" button..</p>
            </div>
            <div class="course-col">
                <h3>MAP</h3>
                <p><BR><br><B></B><BR>You can search your destination,navigate to a place,explore,and pick your route prefrences by tapping on "MAP" button.<BR><br><BR><br></B><BR></p>
            </div>
        </div>
    </section>
    
    <!-- Facilities-->
    <section class="facilities">
        <h1>How it detects drowsiness? </h1>
        <p></p>Here is an paradigm of how drowsiness is detected after scanning your face</p>
        <div class="row">
            <div class="facilities-col">
                <img src="images/library.jpg">
                <h3>Open Eye Detection</h3>
                <p></p></p>
            </div>
            <div class="facilities-col">
                <img src="images/basketBall.jpg">
                <h3>Closed Eye Detection</h3>
                <p></p></p>
            </div>
            <div class="facilities-col">
                <img src="images/cafeteria.jpg">
                <h3>Sleep Alert</h3>
                <p></p>Wake up , be alert , the road needs you.</p>
            </div>
        </div>
    </section>
    <!--Testimonials-->
    <section class="testimonials">
        <h1>What Our Users Says</h1>
        <p></p></p>
        <div class="row">
            <div class="testimonials-col">
                <img src="images/user1.jpg">
                <div>
                    <p></p>I just started using it but,so far i am satisfied.It does its job accurately.Maps is very helpful while driving.Overall my nexperience using this app is very good <BR><BR><B>Bharat Acharaya</B><BR><BR></h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
            </div>
            <div class="testimonials-col">
                <img src="images/user2.jpg">
                <div>
                    <p></p>Even after opening the eyes, the alarm is still beeping for 2 seconds. The app is working fine but still its not hundred percent accurate,so be alert while driving,your safety is in your hands only<BR><BR><B>Vivek Sharma</B><BR><BR></h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>
    <!--Call to action-->
    <section class="cta">
        <h1>TO KNOW MORE ABOUT US<br></h1>
        <a href="about.php" class = "hero-btn" >CLICK HERE</a>
    
   
   </section>
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