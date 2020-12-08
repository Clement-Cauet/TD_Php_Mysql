<!DOCTYPE html>
<html lang="fr">
<?php

    session_start ();
    if(isset($_POST['submit2'])) {
        session_unset();
        session_destroy();
    }  

    
            function formulaire($login="Cauet", $mdp="coucou"){
            ?>    
                <form action="" method="post">
                    <label for="name">Entrez votre login :</label>
                    <input type="text" name="login" id="login" required>
                    <label for="name">Entrez votre mot de passe :</label>
                    <input type="password" name="mdp" id="mdp" required>
                    <input type="submit" name="submit" value="Connexion">
                </form>
                <?php
            
        
        
        if(isset($_POST['login'])&&isset($_POST['mdp'])){
            $_SESSION['login']=$_POST['login'];
            $_SESSION['mdp']=$_POST['mdp'];
        }

        if(isset($_SESSION['login'])&&isset($_SESSION['mdp'])){
            if(($login!=$_POST['login'])){
                echo nl2br("Le login ".$_SESSION['login']." est inconnu.\n");
            }
        
            if(($mdp!=$_POST['mdp'])){
                echo nl2br("Le mot de passe ".$_SESSION['mdp']." est incorrect.\n");
            }
        
            if($mdp==$_POST['mdp']&&$login==$_POST['login']){
                echo '<h1>Coucou '.$login.'</h1>';
                ?>
                <a href="http://youtube.com">Site secret</a>

            <form  action="" method="post">
                <input type="submit" name="submit2" value="Deconnexion">
            </form>
            <?php
            }
        }
        else{
            echo nl2br("La session n'existe pas\n");
        }
    }
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <title>PHP_Partie2_ExoFinal</title>
    </head>
    <body>
        <?php
            include("PHP_Partie2_Menu.php");
        ?>
        <div>
            <h1>Exercice Final</h1>
            <p>Ecrire une fonction qui affiche un formulaire de connexion à une page et qui prend en paramètre 
                un mot de passe. Cette fonction vérifie que le mot de passe saisie dans le formulaire est le même 
                que celui passé en paramètre avec la méthode POST. Appeler cette fonction dans votre code puis :</p>
            <p>-Si elle retourne "OK" afficher que vous avez le bon mot de passe et afficher un lien secret vers 
                une page secret.</p>
            <p>-Sinon afficher que le mot de passe n’est pas bon et ré-appeler la fonction.</p>
            <?php
                formulaire($login="Cauet", $mdp="coucou");
            ?>
            <div>
            <?php
                //code source//
                echo '<p>Code Source :</p>';
                highlight_file((__FILE__));
            ?>
            </div>
        </div>
    </body>
</html>