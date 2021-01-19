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
        public function pseudo(){
            return $this->pseudo;
        }
        public function attaque(){
            return $this->attaque;
        }
        public function defense(){
            return $this->defense;
        }
        public function vie(){
            return $this->vie;
        }
    }

    $BDD=new PDO('mysql:host=192.168.64.175; dbname=TD3-Cauet_exo5; charset=utf8','user','user');
    $req = 'SELECT * FROM `personnage` WHERE idPerso="1"';
    $RequetStatement=$BDD->query($req);
    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <title>PHP_Partie3_Exo5</title>
    </head>
    <body>
        <?php
            include("PHP_Partie3_Menu.php");
        ?>
        <div>
            <h1>Exercice 5</h1>
            <p></p>
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
                    <?php } ?>
                </tbody>
            </table>
            <h4>Fiche de personnage de <?php echo $perso->pseudo(); ?></h4>
            <p>-Attaque : <?php echo $perso->attaque(); ?></p>
            <p>-Défense : <?php echo $perso->defense(); ?></p>
            <p>-Vie : <?php echo $perso->vie(); ?></p>
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