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
    <h1 style="color:white">MAP</h1>
    </section>
    <!-- contact us-->
        <section class="location">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3573.6873572653667!2d75.87580076445029!3d26.40128648335043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396e7967e5570905%3A0x68cabc678f6fb758!2sBANASTHALI%20VIDYAPITH%20NEWAI!5e0!3m2!1sen!2sin!4v1679737826837!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            

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