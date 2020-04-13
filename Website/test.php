<?php 
  session_start(); 

    if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: wtas.html");
  }
?>

<!DOCTYPE html>
<html>
<style>

#song:hover{

    background-color: #BBC4C8   ;
    color: black;
    width: 150px;
}

#song{
    color: white;
    width: 150px;
}

#song1:hover{

    background-color: #BBC4C8   ;
    color: black;
    width: 300px;
}

#song1{
    color: white;
    width: 300px;
}
</style>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Genres</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="test.css" />
  
</head>

<body>
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
                        <a href="rock.html" target="_self">Rock&nbsp;</a>
                        <a href="pop.html" target="_self">Pop</a>
                        <a href="edm.html" target="_self">EDM</a>
                        <a href="love.html" target="_self">Love</a>
                        <a href="classical.html" target="_self">&nbsp;&nbsp;&nbsp;Classical&nbsp;&nbsp;</a>
                        <a href="greats.html" target="_self">Greats</a>
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
    <br>
    <h1 class="heading">Rock</h1>
    <div class="searchtext">Search through millions of rock songs.</div>
    <br>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- The form -->
    <form class="example" action="action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form><br>
    <br><br><br><br><br><br><br>
    <div class="text">
        <i>
            A band's only unique thing is its chemistry, especially if none of you are prodigious players or particularly handsome. The one thing you have is your uniqueness, so we hold on to that.
        </i>
        <br><br>
        <div class="artistname">-Chris Martin</div>
    </div>


        <ul id="list">
            <li style="color: #ffffff;"> Deep Purple 
                <div id="songtop">
                <p onclick="play1();" ondblclick="stop1();" style=" padding: 10px;" id="song"> Smoke on the Water</p> </li> </div>
                <audio source ="Music/Rock/Smoke_On_Water.mp3 controls width="600px" preload="auto">
              
                <script>

                function play1()
                {
                var a = document.getElementById('songtop');
                if(document.getElementById('aud'))
                {
                    var aud = document.getElementById('aud');
                    aud.pause();
                }
                else
                {
                    var aud = document.createElement('audio');
                    aud.src = 'Music/Rock/Smoke_On_Water.mp3';
                    aud.id="aud";
                    aud.play();
                //aud.pause();
                    a.appendChild(aud);
                }
                }
        
                function stop1()
                {
                    var aud = document.getElementById('aud');
                    var div = document.getElementById('songtop')
                    div.removeChild(aud);
            
                }
                </script>
            </audio>


            <li style="color: #ffffff;"> George Thorogood and The Destroyers
                <div id="songtop1">
                <p onclick="play();" ondblclick="stop();" style=" padding: 10px;" id="song"> Bad To The Bone</p> </li> </div>
                <audio source ="Music/Rock/Bad_To_The_Bone.mp3 controls width="600px" preload="auto">
              
                <script>

                function play()
                {
                var a = document.getElementById('songtop1');
                if(document.getElementById('aud'))
                {
                    var aud = document.getElementById('aud');
                    aud.pause();
                }
                else
                {
                    var aud = document.createElement('audio');
                    aud.src = 'Music/Rock/Bad_To_The_Bone.mp3';
                    aud.id="aud";
                    aud.play();
                //aud.pause();
                    a.appendChild(aud);
                }
                }
        
                function stop()
                {
                    var aud = document.getElementById('aud');
                    var div = document.getElementById('songtop1')
                    div.removeChild(aud);
            
                }
                </script>
            </audio>



            
             <li style="color: #ffffff;"> Genesis
                <div id="songtop2">
                <p onclick="play2();" ondblclick="stop2();" style=" padding: 10px;" id="song"> Invisible Touch</p> </li> </div>
                <audio source ="Music/Rock/Invisible_Touch.mp3 controls width="600px" preload="auto">
              
                <script>

                function play2()
                {
                var a = document.getElementById('songtop2');
                if(document.getElementById('aud'))
                {
                    var aud = document.getElementById('aud');
                    aud.pause();
                }
                else
                {
                    var aud = document.createElement('audio');
                    aud.src = 'Music/Rock/Invisible_Touch.mp3';
                    aud.id="aud";
                    aud.play();
                //aud.pause();
                    a.appendChild(aud);
                }
                }
        
                function stop2()
                {
                    var aud = document.getElementById('aud');
                    var div = document.getElementById('songtop2')
                    div.removeChild(aud);
            
                }
                </script>
            </audio>

             

            <li style="color: #ffffff;"> R.H.C.P.
                <div id="songtop3">
                <p onclick="play3();" ondblclick="stop3();" style=" padding: 10px;" id="song"> Higher Ground</p> </li> </div>
                <audio source ="Music/Rock/Higher_Ground.mp3 controls width="600px" preload="auto">
              
                <script>

                function play3()
                {
                var a = document.getElementById('songtop3');
                if(document.getElementById('aud'))
                {
                    var aud = document.getElementById('aud');
                    aud.pause();
                }
                else
                {
                    var aud = document.createElement('audio');
                    aud.src = 'Music/Rock/Higher_Ground.mp3';
                    aud.id="aud";
                    aud.play();
                //aud.pause();
                    a.appendChild(aud);
                }
                }
        
                function stop3()
                {
                    var aud = document.getElementById('aud');
                    var div = document.getElementById('songtop3')
                    div.removeChild(aud);
            
                }
                </script>
            </audio>


             <li style="color: #ffffff;"> R.E.M.
                <div id="songtop4">
                <p onclick="play4();" ondblclick="stop4();" style=" padding: 10px;" id="song1"> Its The End of the World As We Know It</p> </li> </div>
                <audio source ="Music/Rock/It's_The_End_Of_The_World_As_We_Know_It.mp3 controls width="600px" preload="auto">
              
                <script>

                function play4()
                {
                var a = document.getElementById('songtop4');
                if(document.getElementById('aud'))
                {
                    var aud = document.getElementById('aud');
                    aud.pause();
                }
                else
                {
                    var aud = document.createElement('audio');
                    aud.src = "Music/Rock/It's_The_End_Of_The_World_As_We_Know_It.mp3";
                    aud.id="aud";
                    aud.play();
                //aud.pause();
                    a.appendChild(aud);
                }
                }
        
                function stop4()
                {
                    var aud = document.getElementById('aud');
                    var div = document.getElementById('songtop4')
                    div.removeChild(aud);
            
                }
                </script>
            </audio>


            
        </ul>

    <a href="t&c.html" target="_blank">
        <div class="smalltext" style="font-size: 7px;">
            Terms and Conditions
        </div>
    </a>
</body>

</html>