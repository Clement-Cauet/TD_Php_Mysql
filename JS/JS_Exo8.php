<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo8</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <p onmouseover="this.style.color='red'" onclick="this.style.color='lime'" ondblclick="this.style.color='navy'">Ceci est un texte qui change de couleur</p>
        <p onmouseover="this.style.color='red'">Ce texte devient rouge quand on passe sa souris dessus</p>
        <p onclick="this.style.color='lime'">Ce texte devient vert quand on clique dessus</p>
        <p ondblclick="this.style.color='navy'">Ce texte devient bleu quand on double clique dessus</p>
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