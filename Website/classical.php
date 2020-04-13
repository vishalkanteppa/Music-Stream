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

#song2:hover{

    background-color: #BBC4C8   ;
    color: black;
    width: 500px;
}

#song2{
    color: white;
    width: 500px;
}
</style>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Classical</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="classical.css" />
  
</head>

<body>
    <br>
    <p style="text-align:right"><a href="index.php?logout='1'" style="color: whitesmoke">Logout</a>
    <a href="wtas.html" target="_self" style="color: whitesmoke">Home</a></p>

    <h1 class="heading">Classical</h1>
    <div class="searchtext">Search through millions of classical songs.</div>
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
            Works of art make rules; rules do not make works of art.
        </i>
        <br><br>
        <div class="artistname">-Claude Debussy</div>
    </div>


        <ul id="list">
            <li style="color: #ffffff;"> Mozart
                <div id="songtop">
                <p onclick="play1();" ondblclick="stop1();" style=" padding: 10px;" id="song1"> Serenade G Eine kleine Nachtmusik'K525</p> </li> </div>
                <audio source ="Music/Classical/001_Serenade_G_'Eine_kleine_Nachtmusik'_K525.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Classical/001_Serenade_G_'Eine_kleine_Nachtmusik'_K525.mp3";
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


            <li style="color: #ffffff;"> Mozart
                <div id="songtop1">
                <p onclick="play();" ondblclick="stop();" style=" padding: 10px;" id="song1"> Symphony No. 40 in G minor K550</p> </li> </div>
                <audio source ="Music/Classical/002_Symphony_No. 40_in_G_minor_K550.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = 'Music/Classical/002_Symphony_No. 40_in_G_minor_K550.mp3';
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



            
             <li style="color: #ffffff;"> Beethoven
                <div id="songtop2">
                <p onclick="play2();" ondblclick="stop2();" style=" padding: 10px;" id="song1"> Symphony No.5 in C minor op.67 Fate.mp3</p> </li> </div>
                <audio source ="Music/Classical/003_Symphony_No.5_in_C_minor_op.67_Fate.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = 'Music/Classical/003_Symphony_No.5_in_C_minor_op.67_Fate.mp3';
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

             

            <li style="color: #ffffff;"> Vivaldi
                <div id="songtop3">
                <p onclick="play3();" ondblclick="stop3();" style=" padding: 10px;" id="song"> The Four Seasons</p> </li> </div>
                <audio source ="Music/Classical/004_The_Four_Seasons.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = 'Music/Classical/004_The_Four_Seasons.mp3';
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


             <li style="color: #ffffff;"> Beethoven
                <div id="songtop4">
                <p onclick="play4();" ondblclick="stop4();" style=" padding: 10px;" id="song2"> 005 Piano Sonata No. 14 in C sharp minor 'Moonlight' Op.272</p> </li> </div>
                <audio source ="Music/Classical/005_Piano_Sonata_No. 14_in_C sharp_minor_'Moonlight'_Op.27_2.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Classical/005_Piano_Sonata_No. 14_in_C sharp_minor_'Moonlight'_Op.27_2.mp3";
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