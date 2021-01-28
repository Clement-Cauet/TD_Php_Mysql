<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo1</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <p>Calculer la valeur de l'aire d'un rectangle</p>
        <button onclick="calculer()">Calculer</button>
    </div>
    <script>
        function calculer(){
            var longueur;
            var largeur;
            var aire;
            let taille1 = prompt("Choisir une taille en mètre : ");
            longueur = parseInt(taille1, 10);
            let taille2 = prompt("Choisir une autre taille en mètre : ");
            largeur = parseInt(taille2, 10);
            aire = longueur*largeur;
            alert("L'aire de ce rectangle est de : "+aire);
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