<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>API_Exo1</title>
</head>
<body>
    <?php
        include("API_Menu.php");
    ?>
    <div>
        <h1>Exercice 1</h1>
    <div>
    <script>
        setTimeout(function() {
            alert("I'm here!")
        }, 5000);
        alert("Where are you?");
    </script>
        <?php
            //code source//
            echo '<p>Code Source :</p>';
            highlight_file((__FILE__));
        ?>
    </div>
</body>
</html>