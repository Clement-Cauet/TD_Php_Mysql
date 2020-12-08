<!DOCTYPE html>
<html lang="fr">
<?php
    session_start ();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>PHP_Partie1_Exo7</title>
</head>
<body>
    <?php
        include("PHP_Partie1_Menu.php");
    ?>
    <div>
        <h1>Exercice 7</h1>
        <p>Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur
            le bouton la page doit afficher ce que vous avez saisie et l’enregistre dans une variable de
            session $_SESSIONS[]. Le but est que si vous actualisez votre page la variable est
            mémorisée et le site affiche toujours la valeur saisie.</p>
        <form action="" method="session">
            <label for="name">Entrez votre nom :</label>
            <input type="text" name="name" id="name" required>
            <input type="submit" name="submit" value="Envoyer">
        </form>
        <?php

            echo "Session activé";
            
            if(isset($_SESSION['name'])){
                echo "Mon nom est : ".$_SESSION['name'];
            }
            else{
                echo "La session n'existe pas";
                $_SESSION['name']="Cauet";
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