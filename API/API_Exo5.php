<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>API_Exo5</title>
</head>
<body>
    <?php
        include("API_Menu.php");
    ?>
    <div>
        <h1>Exercice 5</h1>
        <button id='submit'>Random moi</button>
        <h2>Bienvenue dans l'arène N°<span id="arenne">…<span></h2>
    <div>
        <?php
            //code source//
            echo '<p>Code Source :</p>';
            highlight_file((__FILE__));
        ?>
    </div>
    <script src="JS/API_Exo5.js"></script>
</body>
</html>