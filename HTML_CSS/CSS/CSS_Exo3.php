<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>CSS_Exo3</title>
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" href="../src/css/CSS_Exo3.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            include("menu.php");
        ?>
        <div class="site">
            <div class="haut"> <!-- bloc d'entête du site -->
                <h1 class="coucou">Le coucou</h1>
            </div>
            <div class="centre"> <!-- bloc de la partie centrale du site -->
                <div class="contenu"> <!-- contenu de la partie centrale du site -->
                    <h1 class="arbre">Les arbres</h1>
                </div>
                <div class="menu_toit"> <!-- partie haute du menu sur la gauche -->
                    <h1 class="toit">Le toit</h1>
                </div>
                <div class="menu_mur"> <!-- partie basse du menu sur la gauche -->
                    <h1 class="mur">Le mur</h1>
                </div>
            </div>
            <div class="bas"> <!-- bloc de fin de page du site -->
                <h1 class="sol">Le sol</h1>
            </div>
        </div>
    </body>
</html>