<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo2</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <h1>Exercice 2</h1>
        <p>Calculer la valeur du périmètre d'un cercle</p>
        <button onclick="calculer()">Calculer</button>
    </div>
    <script>
        function calculer(){
            var rayon;
            var peri;
            var aire;
            let longueur = prompt("Choisir la longeur du rayon en mètre : ");
            longueur = parseInt(longueur, 10);
            peri = longueur*2*Math.PI;
            aire = longueur*longueur*Math.PI;
            alert("Le périmètre du cercle est de : "+peri+"\nL'aire du cercle est de : "+aire);
        }
    </script>
    <div>
        <?php
            //code source//
            echo '<p>Code Source :</p>';
            highlight_file((__FILE__));
        ?>
    </div>
</body>
</html>