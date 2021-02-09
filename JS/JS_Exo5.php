<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo5</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <h1>Exercice 5</h1>
        <p>On créer un premier tableau</p>
        <button onclick="boucle1()">Calculer</button>
        <p>On créer un deuxième tableau</p>
        <button onclick="boucle2()">Calculer</button>
    </div>
    <script>
        function boucle1(){
            var tab=[i];
            for (var i = 0; i < 3; i++) {
                tab[i] = i*i;
            }
            alert("Le tableau est tab=["+tab[0]+","+tab[1]+","+tab[2]+"]");
        }
        function boucle2(){
            var tab=[i];
            var tableau = "";
            let demande = prompt("Choisir une valeur : ");
            valeur = parseInt(demande, 10);
            for (var i = 0; i <= demande; i++) {
                tab[i] = i*i;
                if(i < demande){
                    tableau += tab[i]+",";
                }else{
                    tableau += tab[i];
                }
            }
            alert("Le tableau est tab=["+tableau+"]");
        }
    </script>
    <div>
        <?php
            //code source//
            echo '<p>Code Source :</p>';
            highlight_file((__FILE__));
        ?>
    </div>
</body>
</html>