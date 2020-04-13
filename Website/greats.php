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
    color: black;
    width: 300px;
}

</style>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Greats</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="greats.css" />
    <script src="main.js"></script>
    


</head>

<body id="x1">
    <br>
    <p style="text-align:right"><a href="index.php?logout='1'" style="color: black">Logout</a>
    <a href="wtas.html" target="_self" style="color: black">Home</a></p>

    <h1 class="heading">G.O.A.T.</h1>
    <div class="searchtext">Search through timeless classics.</div>
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
            "I won't be a rock star. I will be a legend."
        </i>
        <br><br>
        <div class="artistname">-Freddie Mercury</div>
    </div>
    

    <li style="color: black;"> The Queen
                <div id="songtop">
                <p onclick="play();" ondblclick="stop();" style=" padding: 10px;" id="song"> We Will Rock You</p> </li> </div>
                <audio source ="Music/Greats/We_Will_Rock_You.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Greats/We_Will_Rock_You.mp3";
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



                <li style="color: black;"> The Queen
                <div id="songtop1">
                <p onclick="play1();" ondblclick="stop1();" style=" padding: 10px;" id="song"> We Are The Champions</p> </li> </div>
                <audio source ="Music/Greats/We-Are-The-Champions.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Greats/We-Are-The-Champions.mp3";
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





             <li style="color: black;"> The Queen
                <div id="songtop2">
                <p onclick="play2();" ondblclick="stop2();" style=" padding: 10px;" id="song"> Somebody to Love</p> </li> </div>
                <audio source ="Music/Greats/Somebody_to_Love.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Greats/Somebody_to_Love.mp3";
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




             <li style="color: black;"> The Queen
                <div id="songtop3">
                <p onclick="play3();" ondblclick="stop3();" style=" padding: 10px;" id="song"> I Want to Break Free</p> </li> </div>
                <audio source ="Music/Greats/I_Want_To_Break_Free.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Greats/I_Want_To_Break_Free.mp3";
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


            <li style="color: black;"> The Beatles
                <div id="songtop4">
                <p onclick="play4();" ondblclick="stop4();" style=" padding: 10px;" id="song"> Day Tripper</p> </li> </div>
                <audio source ="Music/Greats/Day_Tripper.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Greats/Day_Tripper.mp3";
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



            <li style="color: black;"> The Beatles
                <div id="songtop5">
                <p onclick="play5();" ondblclick="stop5();" style=" padding: 10px;" id="song"> Eleanor Rigby</p> </li> </div>
                <audio source ="Music/Greats/Eleanor_Rigby.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Greats/Eleanor_Rigby.mp3";
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



                <li style="color: black;"> The Beatles
                <div id="songtop6">
                <p onclick="play6();" ondblclick="stop6();" style=" padding: 10px;" id="song"> Love Me Do</p> </li> </div>
                <audio source ="Music/Greats/Love_Me_Do.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Greats/Love_Me_Do.mp3";
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




                <li style="color: black;"> The Beatles
                <div id="songtop7">
                <p onclick="play7();" ondblclick="stop7();" style=" padding: 10px;" id="song"> Come Together</p> </li> </div>
                <audio source ="Music/Greats/Come_Together.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Greats/Come_Together.mp3";
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





    <a href="t&c.html" target="_blank">
        <div class="smalltext" style="font-size: 7px;">
            Terms and Conditions
        </div>
    </a>

</body>

</html>