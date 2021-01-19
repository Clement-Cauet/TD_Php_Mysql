<?php

    class User {
        //Propriétés
        private $nom;
        private $prenom;

        //Méthodes
        public function afficheUser() {
            echo "Je suis un User";
        }
    }

    $user = new User();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <title>PHP_Partie3_Exo1</title>
    </head>
    <body>
        <?php
            include("PHP_Partie3_Menu.php");
        ?>
        <div>
            <h1>Exercice 1</h1>
            <p></p>
            <?php
                $user->afficheUser();
            ?> 
        </div>
        <div>
            <?php    
                //code source//
                echo '<p>Code Source :</p>';
                highlight_file((__FILE__));
            ?>
        </div>
    </body>
</html>