<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo10</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <h1>Exercice 10</h1>
        <p onmouseover="this.innerHTML='<img src=src/img/Chat1.gif></img>'">Passe ta souris au dessus de ce texte</p>
        <p onmouseover="this.innerHTML='<img src=src/img/Chat2.gif></img>'">Passe ta souris au dessus de ce texte</p>
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