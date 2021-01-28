<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo9</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <p onclick="style.position='relative';style.left='600px';this.style.width='10px'" ondblclick="style.left='0';this.style.width='500px'">Ceci est un texte qui se déplace quand on clique dessus</p>
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