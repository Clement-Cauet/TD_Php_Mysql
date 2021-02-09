<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <link rel="stylesheet" type="text/css" href="src/css/exo16.css">
    <title>JS_Exo16</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div class="horloge">
        <h1>Exercice 16</h1>
        <button id="demarrer" onclick="timer(demarrer())">Démarrer</button>
        <button id="arreter" onclick="stopTimer(arreter())">Arrêter</button>
        <button id="reset" onclick="reset()">Reset</button>
        <img src="src/img/troteuse.png" class="troteuse" id="troteuse">
        <img src="src/img/minute.png" class="minute" id="minute">
        <img src="src/img/heure.png" class="heure" id="heure">
        <img src="src/img/cadran.png" class="cadran">
    </div>
    <script>
        var sec = 0;
        var min = 0;
        var heure = 0;
        document.getElementById("arreter").disabled = true;
        function demarrer(){
            document.getElementById("demarrer").disabled = true;
            document.getElementById("arreter").disabled = false;
        }
        function arreter(){
            document.getElementById("demarrer").disabled = false;
            document.getElementById("arreter").disabled = true;
        }
        function timer(){
            intervalSec = setInterval(function(){
                for(var i=0; i<6; i++){
                    sec += 1;
                    document.querySelector("#troteuse").style.transform = 'rotate('+sec+ 'deg)';
                }
            }, 1000)
            intervalMin = setInterval(function(){
                for(var i=0; i<6; i++){
                    min += 1;
                    document.querySelector("#minute").style.transform = 'rotate('+min+ 'deg)';
                }
            }, 60000)
            intervalHeure = setInterval(function(){
                for(var i=0; i<30; i++){
                
                    heure += 1;
                    document.querySelector("#heure").style.transform = 'rotate('+heure+ 'deg)';
                }
            }, 3600000)
        }
        function stopTimer(){
            clearInterval(intervalSec);
            clearInterval(intervalMin);
            clearInterval(intervalHeure);
        }
        function reset(){
            stopTimer();
            arreter();
            sec = 0;
            min = 0;
            heure = 0;
            document.querySelector("#troteuse").style.transform = 'rotate('+sec+ 'deg)';
            document.querySelector("#minute").style.transform = 'rotate('+min+ 'deg)';
            document.querySelector("#heure").style.transform = 'rotate('+heure+ 'deg)';
        }
    </script>
</body>
</html>