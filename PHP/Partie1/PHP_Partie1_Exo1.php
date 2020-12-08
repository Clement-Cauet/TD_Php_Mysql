<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <link rel="stylesheet" type="text/css" href="../src/css/PHP_Partie1_Exo1.css">
    <title>PHP_Partie1_Exo1</title>
</head>
<body>
    <?php
        include("PHP_Partie1_Menu.php");
    ?>
    <div>
        <h1>Exercice 1</h1>
        <p>Réaliser une page php qui affiche un cadre bleu si un nombre est impair et en rouge si il
            est paire : vous aurait besoin de la fonction </p>
        <?php
            $NombreAleatoire=rand(0,100); //Le programme choisi une valeur aléatoire allant de 0 à 99

            if($NombreAleatoire%2==1){ //Si le nombre aléatoire est impair 
                echo'<div class="impair">'.$NombreAleatoire.' est impair </div>';
            }
            else{ //Sinon il est pair
                echo'<div class="pair">'.$NombreAleatoire.' est pair</div>';
            }
        ?>
        <div>
        <?php
            //code source//
            echo '<p>Code Source :</p>';
            highlight_file((__FILE__));
        ?>
        </div>
    </div>
</body>
</html>