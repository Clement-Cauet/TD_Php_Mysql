<?php

    class User {
        //Propriétés
        private $nom;
        private $prenom;

        //Méthodes
        //Affiche "Je suis un User"
        public function afficheUser() {
            echo "Je suis un User";
        }
    }

    //Appel de l'objet User
    $user = new User();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <title>PHP_Partie3_Exo1</title>
    </head>
    <body>
        <?php
            include("PHP_Partie3_Menu.php");
        ?>
        <div>
            <h1>Exercice 1</h1>
            <p>Vous devez faire cet exercice en suivant le cours ( ne pas copier coller le code de vos anciens exercices ! )
                le code source doit être disponible dans votre github dans un repertorie PhpObjet. Le code source doit être 
                visible sur votre page dans une balise :<pre></pre></p>
            <p>1) Créer une classe User qui possède 2 propriétés : Nom et Prenom ainsi qu’une methode afficheUser
                qui echo « je suis un User » </p>
            <p>2) Créer 1 users dans votre page index.html puis appeler sa méthode afficheUser</p>
            <p>3) En design CSS HTML reproduiser le schémas de classe de votre objet</p>
            <?php
                //Appel de la method afficheUser de la class User
                $user->afficheUser();
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