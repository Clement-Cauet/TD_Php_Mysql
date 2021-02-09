<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo7</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <h1>Exercice 7</h1>
        <p>Jour de la semaine :</p>
        <button onclick="jourDeLaSemaine()">Cliquez</button>
    </div>
    <script>
        function jourDeLaSemaine(){
            var date;
            date = new Date();
            date.getDay();
            switch (date.getDay()){
                case 0:
                    alert("Nous sommes Dimanche");
                break;
                case 1:
                    alert("Nous sommes Lundi");
                break;
                case 2:
                    alert("Nous sommes Mardi");
                break;
                case 3:
                    alert("Nous sommes Mercredi");
                break;
                case 4:
                    alert("Nous sommes Jeudi");
                break;
                case 5:
                    alert("Nous sommes Vendredi");
                break;
                case 6:
                    alert("Nous sommes Samedi");
                break;
            }
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