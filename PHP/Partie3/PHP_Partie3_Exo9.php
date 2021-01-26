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
        //Fonction delete d'un personnage à la bdd
        public function delete(){
            if(isset($_POST['checkbox'])){
                foreach($_POST['checkbox'] as $check){
                    //Requête SQL de la fonction delete
                    $req = "DELETE FROM `personnage` WHERE `idPerso`= $check";
                    $RequetStatement = $this->BDD->query($req);
                    echo "<meta http-equiv='refresh' content='0'>";
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
        <title>PHP_Partie3_Exo9</title>
    </head>
    <body>
        <?php
            include("PHP_Partie3_Menu.php");
        ?>
        <div>
            <h1>Exercice 9</h1>
            <p></p>
            <form method="post">
                <input type="submit" name="delete" class="delete" value="Supprimer">
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
                        <?php while($Tab=$RequetStatement->fetch()){ ?>
                            <tr>
                                <?php
                                    echo "<td>".$Tab[0]."</td>";
                                    echo "<td>".$Tab[1]."</td>";
                                    echo "<td>".$Tab[2]."</td>";
                                    echo "<td>".$Tab[3]."</td>";
                                    echo "<td>".$Tab[4]."</td>";
                                    $perso = new Personnage($Tab[0], $Tab[1], $Tab[2], $Tab[3], $Tab[4]);
                                    if(isset($_POST['delete'])){
                                        ?><td><input type="checkbox" name="checkbox[]" value="<?php echo $Tab[0] ?>"></td><?php
                                    }
                                ?>
                            </tr>
                            <?php
                                }
                                //Si on appuie sur le bouton Supprimer les éléments, on supprime toutes les données cochées par les checkbox
                                if(isset($_POST['delete'])){
                            ?>
                                <tr>
                                    <td colspan="3"></td>
                                    <td><input type="submit" name="deleteAll" class="delete" value="Supprimer"></td>
                                </tr>
                            <?php
                                }
                            ?>
                    </tbody>
                </table>
            </form>
            <?php
                $perso->delete();
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