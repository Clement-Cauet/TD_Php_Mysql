<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo3</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <h1>Exercice 3</h1>
        <p>On prend x=8 et a=3</p>
        <button onclick="multiplie()">Calculer</button>
        <p>On prend a=3 et b=2</p>
        <button onclick="afficher()">Calculer</button>
    </div>
    <script>
        function multiplie(x=8){
            var a=3;
            var resultat;
            resultat = x*a;
            alert(x+"*"+a+"="+resultat);
        }
        function afficher(){
            var a=3;
            var b=2;
            var resultat;
            resultat = a*b;
            alert(a+"*"+b+"="+resultat);
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