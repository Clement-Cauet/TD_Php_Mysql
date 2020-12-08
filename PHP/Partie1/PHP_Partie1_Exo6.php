<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>PHP_Partie1_Exo6</title>
</head>
<body>
    <?php
        include("PHP_Partie1_Menu.php");
    ?>
    <div>
        <h1>Exercice 6</h1>
        <p>Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur
            le bouton la page doit afficher ce que vous avez saisie en violet Utilisez $_GET [‘champ1’]</p>
        <form action="" method="get">
            <label for="name">Entrez votre nom :</label>
            <input type="text" name="name" id="name" required>
            <input type="submit" name="submit" value="Envoyer">
        </form>
        <?php
            
            if(isset($_GET['name'])){
                echo "Mon nom est : ".$_GET['name'];
            }
            else{
                echo "Remplir le formulaire";
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