<!DOCTYPE html>
<html lang="fr">
<?php
     session_start ();
     if(isset($_POST['destroy'])) {
         session_unset();
         session_destroy();
     }   
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>PHP_Partie1_ExoFinal</title>
</head>
<body>
    <?php
        include("PHP_Partie1_Menu.php");
    ?>
    <div>
        <h1>Exercice Final</h1>
        <p>Créer une appli web avec un bouton de connexion qui demande un login et un mot de passe.
            Comparer la valeur saisie avec le mdp et le login qui sera dans le code « Julien » « 1234 »</p>
        <p>-Si le login n’est pas bon afficher toujours le formulaire avec le message le login est inconnu.</p>
        <p>-Si le mdp n’est pas bon afficher toujours le formulaire avec le message le mot de passe est incorrect.</p>
        <p>-Si le login et le mdp sont ok affichez un message de bienvenue et cachez le formulaire.</p>
        <p>-Puis affichez un bouton de déconnexion. Faites en sorte qu’une fois connecté l’utilisateur le reste lorsque on 
            actualise la page. Lorsque l’on clique sur le bouton de déconnexion la session doit être détruite.</p>

    <?php

    if($_SESSION['loged']==true){
        echo '<form action="" method="post">
                <label for="name">Entrez votre nom :</label>
                <input type="text" name="name" id="name" required>
                <label for="name">Entrez votre MDP :</label>
                <input type="text" name="MDP" id="MDP" required>
                <input type="submit" name="submit" value="Connexion">
            </form>';
    if(isset($_POST['name'])&&isset($_POST['MDP'])){
        $_SESSION['name']=$_POST['name'];
        $_SESSION['MDP']=$_POST['MDP'];
    }
        
    if(isset($_SESSION['name'])&&isset($_SESSION['MDP'])){
        if(($name!=$_POST['name'])){
            echo "Le login ".$_SESSION['name']." est inconnu.";
        }
    
        if(($MDP!=$_POST['MDP'])){
            echo "Le MDP ".$_SESSION['MDP']." est incorrect.";
        }
    
        if($MDP==$_POST['MDP']&&$name==$_POST['name']){
            $_SESSION['loged']=true;
        }
    }
    else{
        echo "La session n'existe pas";
    }

    $name = 'Langlace';
    $MDP = '1234';

    }
    else{
        echo '<h1>Coucou Juju</h1>
        <form  action="" method="post">
            <input type="submit" name="destroy" value="Deconnexion">
        </form>';
    }

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