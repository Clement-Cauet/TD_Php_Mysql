<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>CSS_Exo2</title>
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <link rel="stylesheet" href="../src/ccs/ExoCss_2.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            include("menu.php");
        ?>
        <div>
            <span class="haut"> <!-- bloc d'entête du site -->
                <h1 class="coucou">Le coucou</h1>
            </span>
            <span class="centre"> <!-- bloc de la partie centrale du site -->
                <span class="contenu"> <!-- contenu de la partie centrale du site -->
                    <h1 class="arbre">Les arbres</h1>
                </span>
                <span class="menu"> <!-- partie du menu sur la gauche -->
                    <h1 class="mur">Le mur</h1>
                </span>
            </span>
            <span class="bas"> <!-- bloc de fin de page du site -->
                <h1 class="sol">Le sol</h1>
            </span>
        </div>
    </body>
</html>