<?php

    $BDD=new PDO('mysql:host=192.168.64.175; dbname=TD3-Cauet_exo5; charset=utf8','user','user');

    class Personnage {
        //Propriétés
        private $idPerso;
        private $pseudo;
        private $attaque;
        private $defense;
        private $vie;
        private $BDD;

        //Méthodes
        public function __construct($idPerso, $pseudo, $attaque, $defense, $vie){
            $this->idPerso = $idPerso;
            $this->pseudo = $pseudo;
            $this->attaque = $attaque;
            $this->defense = $defense;
            $this->vie = $vie;
            $this->BDD = new PDO('mysql:host=192.168.64.175; dbname=TD3-Cauet_exo5; charset=utf8','user','user');
        }
        //Fonction insert d'un personnage à la bdd
        public function insert(){
            if(isset($_POST['PersoSubmit'])){
                if(isset($_POST['Pseudo']) && isset($_POST['Attaque']) && isset($_POST['Defense']) && isset($_POST['Vie'])){
                    $this->pseudo = $_POST['Pseudo'];
                    $Pseudo = $this->pseudo;
                    $this->attaque = $_POST['Attaque'];
                    $Attaque = $this->attaque;
                    $this->defense = $_POST['Defense'];
                    $Defense = $this->defense;
                    $this->vie = $_POST['Vie'];
                    $Vie = $this->vie;
                    //Requête SQL de la fonction insert
                    $req = "INSERT INTO `personnage`(`pseudo`, `attaque`, `defense`, `vie`) VALUES ('".$Pseudo."','".$Attaque."','".$Defense."','".$Vie."')";
                    $donneeBrute=$this->BDD->query($req);
                    echo "<meta http-equiv='refresh' content='0'";
                }
            }
        }
    }

    $req = 'SELECT * FROM `personnage` WHERE 1';
    $RequetStatement=$BDD->query($req);

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <title>PHP_Partie3_Exo8</title>
    </head>
    <body>
        <?php
            include("PHP_Partie3_Menu.php");
        ?>
        <div>
            <h1>Exercice 8</h1>
            <p></p>
            <form method="post">
                <input type="submit" name="create" class="create" value="Ajouter">
            </form>
            <?php
                //Si on appuie sur le bouton Ajouter, on créé un formulaire pour ajouter des données
                if(isset($_POST['create'])){
            ?>
            <form method="post">
                <input type="text" name="Pseudo" placeholder="Pseudo" required>
                <input type="text" name="Attaque" placeholder="Attaque" required>
                <input type="text" name="Defense" placeholder="Defense" required>
                <input type="text" name="Vie" placeholder="Vie" required>
                <input type="submit" name="PersoSubmit" value="Ajouter le Perso">
            </form>
            <?php
                }
            ?>
            <table>
                <thead>
                    <tr>
                        <td>idPerso</td>
                        <td>pseudo</td>
                        <td>attaque</td>
                        <td>defense</td>
                        <td>vie</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while($Tab=$RequetStatement->fetch()){ ?>
                        <tr>
                            <?php
                                echo "<td>".$Tab[0]."</td>";
                                echo "<td>".$Tab[1]."</td>";
                                echo "<td>".$Tab[2]."</td>";
                                echo "<td>".$Tab[3]."</td>";
                                echo "<td>".$Tab[4]."</td>";
                                $perso = new Personnage($Tab[0], $Tab[1], $Tab[2], $Tab[3], $Tab[4]);
                            ?>
                        </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
            <?php
                $perso->insert();
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