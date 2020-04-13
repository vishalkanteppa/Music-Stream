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
    <title>EDM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="ed.css" />
  
</head>

<body>
    <br>
    <p style="text-align:right"><a href="index.php?logout='1'" style="color: whitesmoke">Logout</a>
    <a href="wtas.html" target="_self" style="color: whitesmoke">Home</a></p>

    <h1 class="heading">EDM</h1>
    <div class="searchtext">Search through millions of EDM songs.</div>
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
            Using social media to hurt and destroy is callous, acted out by cowards hiding behind computers. My advice is to ignore negativity. Focus on the love around. 
        </i>
        <br><br>
        <div class="artistname">-Martin Garrix</div>
    </div>


        <ul id="list">
            <li style="color: #ffffff;"> Brian McFadden
                <div id="songtop">
                <p onclick="play1();" ondblclick="stop1();" style=" padding: 10px;" id="song"> Chemical Rush</p> </li> </div>
                <audio source ="Music/EDM/02_Chemical_Rush.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = 'Music/EDM/02_Chemical_Rush.mp3';
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


            <li style="color: #ffffff;"> Avicii
                <div id="songtop1">
                <p onclick="play();" ondblclick="stop();" style=" padding: 10px;" id="song"> You Make Me</p> </li> </div>
                <audio source ="Music/EDM/02_You_Make_Me.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = 'Music/EDM/02_You_Make_Me.mp3';
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



            
             <li style="color: #ffffff;"> Alan Walker
                <div id="songtop2">
                <p onclick="play2();" ondblclick="stop2();" style=" padding: 10px;" id="song"> Faded</p> </li> </div>
                <audio source ="Music/EDM/Faded_2016.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = 'Music/EDM/Faded_2016.mp3';
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

             

            <li style="color: #ffffff;"> Awolnation
                <div id="songtop3">
                <p onclick="play3();" ondblclick="stop3();" style=" padding: 10px;" id="song"> Sail</p> </li> </div>
                <audio source ="Music/EDM/10_Sail.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = 'Music/EDM/10_Sail.mp3';
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


             <li style="color: #ffffff;"> Galantis
                <div id="songtop4">
                <p onclick="play4();" ondblclick="stop4();" style=" padding: 10px;" id="song"> Runaway(U & I)</p> </li> </div>
                <audio source ="Music/EDM/Galantis_Runaway_U_I.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/EDM/Galantis_Runaway_U_I.mp3";
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