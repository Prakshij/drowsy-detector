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
            <a href="index.php"><img src="images/logo.png" alt=""></a>
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
    <h1 style="color:white">About Us</h1>
    </section>
    <!-- about us content-->
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>Why Drowsy Detector?</h1>
                <p></p>The purpose of the drowsiness detection system is to aid in the 
                prevention of accidents passenger and commercial vehicles. The system will 
                detect the early symptoms of drowsiness before the driver has fully lost all
                attentiveness and warn the driver that they are no longer capable of operating
                the vehicle safely. This device will not, however, guarantee that the driver 
                will be fully awakened and that an accident will be avoided. It is simply a 
                tool for improving driver safety; focusing primarily on long-haul truck drivers,
                nighttime drivers, people driving long distances alone or people suffering 
                from sleep deprivation.</p>
                       <a href="images/video.mp4" class="hero-btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="images/about.jpg">
            </div>
        </div>
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