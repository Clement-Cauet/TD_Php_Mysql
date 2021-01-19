<?php

    class constructeur {
        //Propriétés
        private $pseudo;
        private $vie;

        //Méthodes
        public function construct() {}
        public function vie() {
            $this->vie = 100;
            echo "Vie : ".$this->vie;
        }
    }

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
            <p></p>
            <?php
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