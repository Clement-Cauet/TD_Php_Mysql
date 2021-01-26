<?php

    class constructeur {
        //Propriétés
        private $pseudo;
        private $vie;

        //Méthodes
        public function __construct() {

        }
        //Affiche la vie
        public function vie() {
            $this->vie = 100;
            echo "Vie : ".$this->vie;
        }
    }

    //Appel de l'objet constructeur
    $constructeur = new constructeur();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <title>PHP_Partie3_Exo2</title>
    </head>
    <body>
        <?php
            include("PHP_Partie3_Menu.php");
        ?>
        <div>
            <h1>Exercice 2</h1>
            <p>Une classe peu posséder une méthode spéciale : « constructeur ». Cette méthode est automatiquement appelée 
            lorsqu’un objet de cette classe est instancié (créée)</p>
            <p>Créer une classe Personnage qui possède 2 propriétés : Speudo et Vie ainsi qu’un constructeur vide : 
                public function __construct(){}</p>
            <p>Implémenter le constructeur pour qu’il initialise la propriétés vie à 100</p>
            <?php
                //Appel de la method afficheUser de la class User
                $constructeur->vie();
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