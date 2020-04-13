<?php 
  session_start(); 

    if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: wtas.html");
  }
?>

<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Moosic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="shortcut icon" href="c2.jpg" />
</head>

<body bgcolor=none>
    <div>
        <ul class="navigation">
            <img src="cow.jpg" id="cowpic">
            <li> <a href="wtas.html">Home</a></li>
            <li><a href="#abus">About Us</a></li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">Categories</button>
                    <div class="dropdown-content" style="font-size: 17">
                        <a href="rock.php" target="_self">Rock&nbsp;</a>
                        <a href="pop.php" target="_self">Pop</a>
                        <a href="edm.php" target="_self">EDM</a>
                        <a href="love.php" target="_self">Love</a>
                        <a href="classical.php" target="_self">&nbsp;&nbsp;&nbsp;Classical&nbsp;&nbsp;</a>
                        <a href="greats.php" target="_self">Greats</a>
                    </div>
                </div>
            </li>
            <!--<li id="sign"><a href="signin.html" target=" ">Login</a></li>
            <li id="sign"><a href="register.php" target=" ">Signup</a></li> -->
             <?php  if (isset($_SESSION['username'])) : ?>
            <li id="sign"><a href="index.php?logout='1'">Logout</a></li>
            <!--<li id="sign"><?php echo "<p style='color:whitesmoke;'>".$_SESSION['username']. "</p>"; ?> </li>-->
            <p>  <?php echo "<p style='color:whitesmoke;' align='right';>".$_SESSION['username']. "</p>"; ?> </p>
            
             <?php endif ?>
        </ul>
    </div>
    <br><br><br><br>
    <div id="toptext">Welcome to Moo-sic</div>
    <a href="#exp">
        <div class="button" id="discbutton">EXPLORE</div>
    </a><br><br>
    <br<br>><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="explore">
            <div>
                <div id="exp">
                    <!--For explore link-->
                </div>
                <div id="textexplore">Explore</div><br>
                <div class="innertext">Browse through different genres of music at a glance.</div><br>
                <a href="edm.php" target="_self"><img src="edm.jpg" id="opac1" style="position: absolute;right: 200px" height=430px width=200px></a>
                <a href="pop.php" target="_self"><img src="pop.jpg" id="opac3" style="position: absolute;left: 200px" height=430px width=200px></a>
                <a href="classical.php" target="_blank"><img src="classical11.jpg" id="opac4" style="position: absolute;left: 580px" height=430px width=200px></a>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div id="text">
                <p style="position: absolute;right: 280px;">EDM</p>
                <!-- <p style="position: absolute;left: 175px;">Rock</p> -->
                <p style="position: absolute;left: 280px;">Pop</p>
                <p style="position: absolute;left: 650px;">Classical</p>
            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="aboutus" id="aboutustext">
            <p id="abus">
                <!--For about us link-->
            </p><br>About Us<br><br>
            <div class="abustext">With Moosic, it’s easy to find the right music for every moment: on your phone, computer, tablet and more. There are millions of tracks on Moosic. So whether you’re working out, partying or relaxing, the right music is always at
                your fingertips. Choose what you want to listen to. You can also browse through the music collections of friends, artists and celebrities, or create a radio station and just sit back. Soundtrack your life with
                Moosic. Listen now!
            </div><br><br><br><br><br>
            <div id="aboutustext" style="position: absolute;left: 2%">Contact Us:</div>
            <div style="position: absolute; right:25%">Visit Us at:</div><br><br>
            <div class="abustext" id="align"> Mobile: +91 99008 51788</div>
            <div class="abustext" id="address">
                1600 Amphitheatre Parkway Mountain View, CA 94043 <br> 2300 Traverwood Dr. Ann Arbor, MI 48105
            </div><br>
            <div class="abustext" id="align">Email: moosic_cc@gmail.com</div>
        </div>
        <a href="t&c.html" target="_blank">
            <div class="smalltext" style="position: absolute; bottom:-1360;">Terms and Conditions</div>
        </a>
</body>

</html>