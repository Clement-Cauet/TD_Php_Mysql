<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo15</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <h1>Exercice 15</h1>
        <button id="init" onclick="init()">Init</button>
        <span id="span1">Coucou</span>
    </div>
    <script>
        function init(){
            var span = document.getElementById("span1");
            var Monobjetspan = addEventListener("click", monGestionnaire(), false);
            function monGestionnaire(){
                span.style.color='blue'
            }
        }
    </script>
</body>
</html>