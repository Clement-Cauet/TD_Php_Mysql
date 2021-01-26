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
        //Affiche le pseudo
        public function affichePseudo(){
            echo $this->pseudo;
        }
        //Affiche l'attaque
        public function afficheattaque(){
            echo $this->attaque;
        }
        //Affiche la défense
        public function affichedefense(){
            echo $this->defense;
        }
        //Affiche la vie
        public function afficheVie(){
            echo $this->vie;
        }
    }

    //Appel de l'objet Personnage
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
            <p>Une classe peu posséder une méthode spéciale : « constructeur ». Comme c’est une méthode elle peu 
                recevoir des paramètres. Attention à partir du moment ou il y a un constructeur qui attend des paramètres
                vous ne pouvez plus instancier votre classe sans paramètre.</p>
            <p>1) Reprendre la classe Personnage et implémenter le constructeur pour qu’il initialise la propriétés vie 
                à 100 et initialise la propriété speudo avec la valeur passer en paramètre</p>
            <p>2) Créer un personage Exemple personage1 = new personage("Julien");</p>
            <p>3) Ajouter une méthode dans votre classe pour afficher le nombre de point de vie du personnage ainsi 
                que son pseudo.</p>
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