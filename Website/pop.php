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
    <title>Pop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="pop.css" />
    <script src="main.js"></script>
    


</head>

<body id="x1">
    <br>
    <p style="text-align:right"><a href="index.php?logout='1'" style="color: whitesmoke">Logout</a>
    <a href="wtas.html" target="_self" style="color: whitesmoke">Home</a></p>

    <h1 class="heading">Pop</h1>
    <div class="searchtext">Search through millions of Pop songs.</div>
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
            I THINK YOU HAVE TO TAKE ME FOR ME . I AM WHO I AM
        </i>
        <br><br>
        <div class="artistname">-Harry Styles</div>
    </div>
    

                <li style="color: #ffffff;"> Blue
                <div id="songtop">
                <p onclick="play();" ondblclick="stop();" style=" padding: 10px;" id="song"> All Rise</p> </li> </div>
                <audio source ="Music/Pop/All_Rise.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Pop/All_Rise.mp3";
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



                <li style="color: #ffffff;"> Phil Collins
                <div id="songtop1">
                <p onclick="play1();" ondblclick="stop1();" style=" padding: 10px;" id="song"> Another Day In Paradise</p> </li> </div>
                <audio source ="Music/Pop/Another_Day_In_Paradise.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Pop/Another_Day_In_Paradise.mp3";
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



            <li style="color: #ffffff;"> Bobby McFerrin
                <div id="songtop2">
                <p onclick="play2();" ondblclick="stop2();" style=" padding: 10px;" id="song"> Don't Worry Be Happy</p> </li> </div>
                <audio source ="Music/Pop/Dont_Worry_Be_Happy.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Pop/Dont_Worry_Be_Happy.mp3";
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


             <li style="color: #ffffff;"> Cutting Crew
                <div id="songtop3">
                <p onclick="play3();" ondblclick="stop3();" style=" padding: 10px;" id="song"> I Just Died In Your Arms Tonight</p> </li> </div>
                <audio source ="Music/Pop/I_Just_Died In_Your_Arms_Tonight.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Pop/I_Just_Died In_Your_Arms_Tonight.mp3";
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



                <li style="color: #ffffff;"> Vanilla Ice
                <div id="songtop4">
                <p onclick="play4();" ondblclick="stop4();" style=" padding: 10px;" id="song"> Ice Ice Baby</p> </li> </div>
                <audio source ="Music/Pop/Ice_Ice_Baby.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Pop/Ice_Ice_Baby.mp3";
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


            <div id="newcol">
            <li style="color: #ffffff;"> Shaggy
                <div id="songtop5">
                <p onclick="play5();" ondblclick="stop5();" style=" padding: 10px;" id="song"> Mr Boombastic</p> </li> </div>
                <audio source ="Music/Pop/Mr_Boombastic.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Pop/Mr_Boombastic.mp3";
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



            <li style="color: #ffffff;"> MC Hammer
                <div id="songtop6">
                <p onclick="play6();" ondblclick="stop6();" style=" padding: 10px;" id="song"> Can't Touch This</p> </li> </div>
                <audio source ="Music/Pop/U_Cant_Touch_This.mp3 controls width="600px" preload="auto">
              
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
                    aud.src = "Music/Pop/U_Cant_Touch_This.mp3";
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



            




    <a href="t&c.html" target="_blank">
        <div class="smalltext" style="font-size: 7px;">
            Terms and Conditions
        </div>
    </a>
</body>

</html>