<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>HTML_Exo3</title>
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            include("menu.php");
        ?>
        <div>
            <table align="center" border="1">
                <thead>
                    <th>Description</th>
                    <th>Information</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Image de coucou</td>
                        <td><img src="../src/img/coucou.jpg"></td>
                    </tr>
                    <tr>
                        <td>Vidéo du coucou</td>
                        <td><a href="https://www.youtube.com/watch?v=3HzC26zEK-4">Vidéo</a></td>
                    </tr>
                    <tr>
                        <td>Chant du coucou</td>
                        <td><a href="https://soundcloud.com/lou-marie-173904431/coucou-minot-minette-par-lou-parole-chant-melodie-dessin">Musique</a></td>
                    </tr>
                </tbody>
            </table>
            <button><a href="HTML.php">Retour à la page HTML</a></button>
        </div>
    </body>
</html>
<!--Image: <img src="image.jpg">
    Vidéo: <a href:"">
    Musique: <a href:"">
    Tableau: <table>/<tr>/<td>-->
