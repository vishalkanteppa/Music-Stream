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
    width: 300px;
}

#song{
    color: white;
    width: 300px;
}

</style>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Love</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="love.css" />
    <script src="main.js"></script>
    


</head>

<body id="x1">
    <br>
    <p style="text-align:right"><a href="index.php?logout='1'" style="color: whitesmoke">Logout</a>
    <a href="wtas.html" target="_self" style="color: whitesmoke">Home</a></p>
    <h1 class="heading">Love</h1>
    <div class="searchtext">Search through millions of Love songs.</div>
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
            "It's tougher to be vulnerable , than to be actually tough"
        </i>
        <br><br>
        <div class="artistname">-Rihanna</div>
    </div>
    

    <li style="color: #ffffff;"> Atomic Kitten
                <div id="songtop">
                <p onclick="play();" ondblclick="stop();" style=" padding: 10px;" id="song"> Eternal Flame</p> </li> </div>
                <audio source ="Music/Love/Eternal_Flame.mp3 controls width="600px" preload="auto">
              
                <script>

                function play()
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
                    aud.src = "Music/Love/Eternal_Flame.mp3";
                    aud.id="aud";
                    aud.play();
                //aud.pause();
                    a.appendChild(aud);
                }
                }
        
                function stop()
                {
                    var aud = document.getElementById('aud');
                    var div = document.getElementById('songtop')
                    div.removeChild(aud);
            
                }
                </script>
            </audio>



                <li style="color: #ffffff;"> UB 40
                <div id="songtop1">
                <p onclick="play1();" ondblclick="stop1();" style=" padding: 10px;" id="song"> Can't Help Falling in Love With You</p> </li> </div>
                <audio source ="Music/Love/Cant_Help_Falling_In_Love_With_You.mp3 controls width="600px" preload="auto">
              
                <script>

                function play1()
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
                    aud.src = "Music/Love/Cant_Help_Falling_In_Love_With_You.mp3";
                    aud.id="aud";
                    aud.play();
                //aud.pause();
                    a.appendChild(aud);
                }
                }
        
                function stop1()
                {
                    var aud = document.getElementById('aud');
                    var div = document.getElementById('songtop1')
                    div.removeChild(aud);
            
                }
                </script>
            </audio>





             <li style="color: #ffffff;"> Goo Goo Dolls
                <div id="songtop2">
                <p onclick="play2();" ondblclick="stop2();" style=" padding: 10px;" id="song"> Iris.mp3</p> </li> </div>
                <audio source ="Music/Love/Iris.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Love/Iris.mp3";
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




             <li style="color: #ffffff;"> The Rembrandtts
                <div id="songtop3">
                <p onclick="play3();" ondblclick="stop3();" style=" padding: 10px;" id="song"> I'll Be There For You</p> </li> </div>
                <audio source ="Music/Love/I'll_Be_There_For_You.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Love/I'll_Be_There_For_You.mp3";
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


            <li style="color: #ffffff;"> Bobby Vee
                <div id="songtop4">
                <p onclick="play4();" ondblclick="stop4();" style=" padding: 10px;" id="song"> More Than I Can Say</p> </li> </div>
                <audio source ="Music/Love/More_Than_I Can_Say.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Love/More_Than_I Can_Say.mp3";
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



            <li style="color: #ffffff;"> M.L.T.R.
                <div id="songtop5">
                <p onclick="play5();" ondblclick="stop5();" style=" padding: 10px;" id="song"> The Actor</p> </li> </div>
                <audio source ="Music/Love/The_Actor.mp3 controls width="600px" preload="auto">
              
                <script>

                function play5()
                {
                var a = document.getElementById('songtop5');
                if(document.getElementById('aud'))
                {
                    var aud = document.getElementById('aud');
                    aud.pause();
                }
                else
                {
                    var aud = document.createElement('audio');
                    aud.src = "Music/Love/The_Actor.mp3";
                    aud.id="aud";
                    aud.play();
                //aud.pause();
                    a.appendChild(aud);
                }
                }
        
                function stop5()
                {
                    var aud = document.getElementById('aud');
                    var div = document.getElementById('songtop5')
                    div.removeChild(aud);
            
                }
                </script>
            </audio>



                <li style="color: #ffffff;"> Foreigner
                <div id="songtop6">
                <p onclick="play6();" ondblclick="stop6();" style=" padding: 10px;" id="song"> Waiting For A Girl Like You</p> </li> </div>
                <audio source ="Music/Love/Waiting_For_A Girl_Like_You.mp3 controls width="600px" preload="auto">
              
                <script>

                function play6()
                {
                var a = document.getElementById('songtop6');
                if(document.getElementById('aud'))
                {
                    var aud = document.getElementById('aud');
                    aud.pause();
                }
                else
                {
                    var aud = document.createElement('audio');
                    aud.src = "Music/Love/Waiting_For_A Girl_Like_You.mp3";
                    aud.id="aud";
                    aud.play();
                //aud.pause();
                    a.appendChild(aud);
                }
                }
        
                function stop6()
                {
                    var aud = document.getElementById('aud');
                    var div = document.getElementById('songtop6')
                    div.removeChild(aud);
            
                }
                </script>
            </audio>




                <li style="color: #ffffff;"> John Lennon
                <div id="songtop7">
                <p onclick="play7();" ondblclick="stop7();" style=" padding: 10px;" id="song"> Woman</p> </li> </div>
                <audio source ="Music/Love/Woman.mp3 controls width="600px" preload="auto">
              
                <script>

                function play7()
                {
                var a = document.getElementById('songtop7');
                if(document.getElementById('aud'))
                {
                    var aud = document.getElementById('aud');
                    aud.pause();
                }
                else
                {
                    var aud = document.createElement('audio');
                    aud.src = "Music/Love/Woman.mp3";
                    aud.id="aud";
                    aud.play();
                //aud.pause();
                    a.appendChild(aud);
                }
                }
        
                function stop7()
                {
                    var aud = document.getElementById('aud');
                    var div = document.getElementById('songtop7')
                    div.removeChild(aud);
            
                }
                </script>
            </audio>



            <li style="color: #ffffff;"> Chicago
                <div id="songtop8">
                <p onclick="play8();" ondblclick="stop8();" style=" padding: 10px;" id="song"> Youre The Inspiration</p> </li> </div>
                <audio source ="Music/Love/Youre_The_Inspiration.mp3 controls width="600px" preload="auto">
              
                <script>

                function play8()
                {
                var a = document.getElementById('songtop8');
                if(document.getElementById('aud'))
                {
                    var aud = document.getElementById('aud');
                    aud.pause();
                }
                else
                {
                    var aud = document.createElement('audio');
                    aud.src = "Music/Love/Youre_The_Inspiration.mp3";
                    aud.id="aud";
                    aud.play();
                //aud.pause();
                    a.appendChild(aud);
                }
                }
        
                function stop8()
                {
                    var aud = document.getElementById('aud');
                    var div = document.getElementById('songtop8')
                    div.removeChild(aud);
            
                }
                </script>
            </audio>


    <a href="t&c.html" target="_blank">
        <div class="smalltext" style="font-size: 7px;">
            Terms and Conditions
        </div>
    </a>

</body>

</html>