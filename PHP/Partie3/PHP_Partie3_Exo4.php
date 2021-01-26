<?php

    class Personnage {
        //Propriétés
        private $pseudo;
        private $attaque;
        private $defense;
        private $vie;

        //Méthodes
        //Fonction contruct
        public function __construct($pseudo, $attaque, $defense, $vie){
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

    class Combat {
        //Propriétés
        private $charge;
        private $degat;
        private $resteVie;

        //Méthodes
        //Calcul de la charge avec la'attaque du personnage et la puissance de la charge
        public function charge($perso1){
            $this->charge = $perso1->attaque() + 10;
        }
        //Calcul des dégats de la charge en fonction de la défense du personnage
        public function degat($perso2){
            $this->degat = $this->charge - $perso2->defense();
            $this->resteVie = $perso2->vie() + $perso2->defense() - $this->charge;
            return $this->degat;
        }
        //Contient la variable restVie
        public function resteVie(){
            return $this->resteVie;
        }
    }

    $perso1 = new Personnage("Julien", "30", "10", "100");
    $perso2 = new Personnage("Lucide", "20", "20", "100");
    $combat = new Combat();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <title>PHP_Partie3_Exo4</title>
    </head>
    <body>
        <?php
            include("PHP_Partie3_Menu.php");
        ?>
        <div>
            <h1>Exercice 4</h1>
            <p></p>
            <table>
                <tr>
                    <td colspan="2"><?php echo $perso1->pseudo(); ?></td>
                </tr>
                <tr>
                    <td>Attaque</td>
                    <td><?php echo $perso1->attaque(); ?></td>
                </tr>
                <tr>
                    <td>Défense</td>
                    <td><?php echo $perso1->attaque(); ?></td>
                </tr>
                <tr>
                    <td>Vie</td>
                    <td><?php echo $perso1->vie(); ?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td colspan="2"><?php echo $perso2->pseudo(); ?></td>
                </tr>
                <tr>
                    <td>Attaque</td>
                    <td><?php echo $perso2->attaque(); ?></td>
                </tr>
                <tr>
                    <td>Défense</td>
                    <td><?php echo $perso2->attaque(); ?></td>
                </tr>
                <tr>
                    <td>Vie</td>
                    <td><?php echo $perso2->vie(); ?></td>
                </tr>
            </table>
            <h4><?php echo $perso1->pseudo(); ?> VS <?php echo $perso2->pseudo(); ?></h4>
            <p>-<?php echo $perso1->pseudo(); ?> attaque <?php echo $perso2->pseudo(); ?></p>
            <p>-<?php echo $perso1->pseudo(); ?> utilise la compétence charge avec une puissance de 10</p>
            <?php $combat->charge($perso1); ?>
            <p>-<?php echo $perso1->pseudo(); ?> inflige <?php echo $combat->degat($perso2); ?> points de dégats à <?php $perso2->Pseudo(); ?></p>
            <p>-<?php echo $perso2->pseudo(); ?> a <?php echo $combat->resteVie(); ?> points de vie</p>
            <p>-Fin du combat</p>
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