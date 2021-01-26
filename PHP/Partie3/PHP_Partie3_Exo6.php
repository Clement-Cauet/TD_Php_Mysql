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
        private $soin;
        private $resteVie;
        private $BDD;

        //Méthodes
        public function __construct(){
            $this->BDD = new PDO('mysql:host=192.168.64.175; dbname=TD3-Cauet_exo5; charset=utf8','user','user');
        }
        //Calcul de la charge avec la'attaque du personnage et la puissance de la charge
        public function charge($perso1){
            $this->charge = $perso1->attaque() + 10;
        }
        //Calcul des dégats de la charge en fonction de la défense du personnage et l'update dans la bdd
        public function degat($perso2){
            $this->degat = $this->charge - $perso2->defense();
            $this->resteVie = $perso2->vie() + $perso2->defense() - $this->charge;
            $vie = $this->resteVie;
            $req = "UPDATE `personnage` SET `vie`='$vie' WHERE `idPerso`='2'";
            $RequetStatement = $this->BDD->query($req);
            return $this->degat;
        }
        //Restore la vie du personnage à 100 et l'update dans la bdd
        public function soin($perso2){
            $this->resteVie = 100;
            $vie = $this->resteVie;
            $req = "UPDATE `personnage` SET `vie`='$vie' WHERE `idPerso`='2'";
            $RequetStatement = $this->BDD->query($req);
        }
        //Contient la variable restVie
        public function resteVie(){
            return $this->resteVie;
        }
    }

    //Fonction d'update du personnage à la bdd
    function requet_update_pharmacie($BDD){
        try{
            if(isset($_POST['updateModifier'])){
                $idPerso=$_POST['idPerso'];
                $pseudo=$_POST['pseudo'];
                $attaque=$_POST['attaque'];
                $defense=$_POST['defense'];
                $vie=$_POST['vie'];
                //Requête SQL de la fonction update
                $req = "UPDATE `personnage` SET `pseudo`='$pseudo', `attaque`='$attaque', `defense`='$defense', `vie`='$vie' WHERE `idPerso`='$idPerso'";
                $RequetStatement = $BDD->query($req);
                echo "<meta http-equiv='refresh' content='0'>";
            }
        }catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }

    $combat = new Combat();

    $req1 = 'SELECT * FROM `personnage` WHERE idPerso="1"';
    $RequetStatement1=$BDD->query($req1);
    $req2 = 'SELECT * FROM `personnage` WHERE idPerso="2"';
    $RequetStatement2=$BDD->query($req2);
    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <title>PHP_Partie3_Exo6</title>
    </head>
    <body>
        <?php
            include("PHP_Partie3_Menu.php");
        ?>
        <div>
            <h1>Exercice 6</h1>
            <p></p>
            <form method="post">
                <input type="submit" name="update" class="update" value="Modifier">
            </form>
            <form method="post">
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
                        <?php while($Tab=$RequetStatement1->fetch()){ ?>
                            <tr>
                                <?php
                                    if(isset($_POST['modifier'])){
                                        foreach($_POST['radio'] as $radio){
                                            if(isset($_POST['radio']) && $Tab[0]==$radio){
                                                echo "<td><input type='hidden' name='idPerso' value=".$Tab[0].">".$Tab[0]."</td>";
                                                echo "<td><input type='text' name='pseudo' size='15' value=".$Tab[1]."></td>";
                                                echo "<td><input type='text' name='attaque' size='3' value=".$Tab[2]."></td>";
                                                echo "<td><input type='text' name='defense' size='3' value=".$Tab[3]."></td>";
                                                echo "<td><input type='text' name='vie' size='3' value=".$Tab[4]."></td>";
                                                echo "<td><input type='submit' name='updateModifier' class='update' value='Modifier'></td>";
                                            }else{
                                                echo "<td>".$Tab[0]."</td>";
                                            echo "<td>".$Tab[1]."</td>";
                                            echo "<td>".$Tab[2]."</td>";
                                            echo "<td>".$Tab[3]."</td>";
                                            echo "<td>".$Tab[4]."</td>";
                                            }
                                        }
                                    }else{
                                        echo "<td>".$Tab[0]."</td>";
                                        echo "<td>".$Tab[1]."</td>";
                                        echo "<td>".$Tab[2]."</td>";
                                        echo "<td>".$Tab[3]."</td>";
                                        echo "<td>".$Tab[4]."</td>";
                                        $perso1 = new Personnage($Tab[0], $Tab[1], $Tab[2], $Tab[3], $Tab[4]);
                                    }
                                    if(isset($_POST['update'])){
                                        echo "<td><input type='radio' name='radio[]' value=".$Tab[0].">";?>
                                        <input type='submit' name='modifier' class="update" value='Modifier'></td><?php
                                    }
                                ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
            <form method="post">
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
                        <?php while($Tab=$RequetStatement2->fetch()){ ?>
                            <tr>
                                <?php
                                    if(isset($_POST['modifier'])){
                                        foreach($_POST['radio'] as $radio){
                                            if(isset($_POST['radio']) && $Tab[0]==$radio){
                                                echo "<td><input type='hidden' name='idPerso' value=".$Tab[0].">".$Tab[0]."</td>";
                                                echo "<td><input type='text' name='pseudo' size='15' value=".$Tab[1]."></td>";
                                                echo "<td><input type='text' name='attaque' size='3' value=".$Tab[2]."></td>";
                                                echo "<td><input type='text' name='defense' size='3' value=".$Tab[3]."></td>";
                                                echo "<td><input type='text' name='vie' size='3' value=".$Tab[4]."></td>";
                                                echo "<td><input type='submit' name='updateModifier' class='update' value='Modifier'></td>";
                                            }else{
                                                echo "<td>".$Tab[0]."</td>";
                                            echo "<td>".$Tab[1]."</td>";
                                            echo "<td>".$Tab[2]."</td>";
                                            echo "<td>".$Tab[3]."</td>";
                                            echo "<td>".$Tab[4]."</td>";
                                            }
                                        }
                                    }else{
                                        echo "<td>".$Tab[0]."</td>";
                                        echo "<td>".$Tab[1]."</td>";
                                        echo "<td>".$Tab[2]."</td>";
                                        echo "<td>".$Tab[3]."</td>";
                                        echo "<td>".$Tab[4]."</td>";
                                        $perso2 = new Personnage($Tab[0], $Tab[1], $Tab[2], $Tab[3], $Tab[4]);
                                    }
                                    if(isset($_POST['update'])){
                                        echo "<td><input type='radio' name='radio[]' value=".$Tab[0].">";?>
                                        <input type='submit' name='modifier' class="update" value='Modifier'></td><?php
                                    }
                                ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
            <?php 
                requet_update_pharmacie($BDD);
            ?>
            <h4><?php echo $perso1->pseudo(); ?> VS <?php echo $perso2->pseudo(); ?></h4>
            <p>-<?php echo $perso1->pseudo(); ?> attaque <?php echo $perso2->pseudo(); ?></p>
            <p>-<?php echo $perso1->pseudo(); ?> utilise la compétence charge avec une puissance de 10</p>
            <?php $combat->charge($perso1); ?>
            <p>-<?php echo $perso1->pseudo(); ?> inflige <?php echo $combat->degat($perso2); ?> points de dégats à <?php echo $perso2->pseudo(); ?></p>
            <p>-<?php echo $perso2->pseudo(); ?> a <?php echo $combat->resteVie(); ?> points de vie</p>
            <?php $combat->soin($perso2); ?>
            <p>-<?php echo $perso2->pseudo(); ?> se soigne</p>
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