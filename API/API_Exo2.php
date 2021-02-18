<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>API_Exo2</title>
</head>
<body>
    <?php
        include("API_Menu.php");
    ?>
    <div>
        <h1>Exercice 2</h1>
        <span id="root" onclick="root()">Coucou</span>
        <span name="test" onclick="test()">Bonjour</span>
    <div>
    <script>
        function root(){
            var elem = document.getElementById("root");
            elem.innerHTML = "Salut";
        }
        function test(){
            for(var i=0; i<3; i++){
                var tab = document.getElementsByName("test");
                tab.innerHTML = "Salut";
            }
        }
    </script>
        <?php
            //code source//
            echo '<p>Code Source :</p>';
            highlight_file((__FILE__));
        ?>
    </div>
</body>
</html>