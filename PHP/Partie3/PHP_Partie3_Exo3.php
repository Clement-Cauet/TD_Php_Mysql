<?php

    class Personnage {
        //Propriétés
        private $pseudo;
        private $attaque;
        private $defense;
        private $vie;

        //Méthodes
        public function __construct($pseudo, $attaque, $defense, $vie){
            $this->pseudo = $pseudo;
            $this->attaque = $attaque;
            $this->defense = $defense;
            $this->vie = $vie;
        }
        public function affichePseudo(){
            echo $this->pseudo;
        }
        public function afficheattaque(){
            echo $this->attaque;
        }
        public function affichedefense(){
            echo $this->defense;
        }
        public function afficheVie(){
            echo $this->vie;
        }
    }

    $perso = new Personnage("Julien", "30", "10", "100");
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <title>PHP_Partie3_Exo3</title>
    </head>
    <body>
        <?php
            include("PHP_Partie3_Menu.php");
        ?>
        <div>
            <h1>Exercice 3</h1>
            <p></p>
            <table>
            <tr>
                <td colspan="2"><?php $perso->affichePseudo(); ?></td>
            </tr>
            <tr>
                <td>Attaque</td>
                <td><?php $perso->afficheAttaque(); ?></td>
            </tr>
            <tr>
                <td>Défense</td>
                <td><?php $perso->afficheAttaque(); ?></td>
            </tr>
            <tr>
                <td>Vie</td>
                <td><?php $perso->afficheVie(); ?></td>
            </tr>
        </table>  
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