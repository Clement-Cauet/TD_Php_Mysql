<?php

    class Personnage {
        //Propriétés
        private $idPerso;
        private $pseudo;
        private $attaque;
        private $defense;
        private $vie;

        //Méthodes
        public function __construct($idPerso, $pseudo, $attaque, $defense, $vie){
            $this->idPerso = $idPerso;
            $this->pseudo = $pseudo;
            $this->attaque = $attaque;
            $this->defense = $defense;
            $this->vie = $vie;
        }
        //Contient la variable pseudo
        public function pseudo(){
            return $this->pseudo;
        }
        //Contient la variable attaque
        public function attaque(){
            return $this->attaque;
        }
        //Contient la variable defense
        public function defense(){
            return $this->defense;
        }
        //Contient la variable vie
        public function vie(){
            return $this->vie;
        }
    }

    $BDD=new PDO('mysql:host=192.168.64.175; dbname=TD3-Cauet_exo5; charset=utf8','user','user');
    $req = 'SELECT * FROM `personnage` WHERE 1';
    $RequetStatement=$BDD->query($req);
    $personnage = array();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <title>PHP_Partie3_Exo7</title>
    </head>
    <body>
        <?php
            include("PHP_Partie3_Menu.php");
        ?>
        <div>
            <h1>Exercice 7</h1>
            <p></p>
                    <?php 
                        while($Tab=$RequetStatement->fetch()){
                            array_push($personnage, new Personnage($Tab[0], $Tab[1], $Tab[2], $Tab[3], $Tab[4])); 
                        }
                        //Affiche le pseudo et la vie des personnages de la bdd
                        foreach($personnage as $value){
                            echo '<p>'.$value->pseudo().' a ';
                            echo $value->vie().' points de vie</p>';
                        }
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