<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo11</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <h1>Exercice 11</h1>
        <h1 id="modif_paragraphe" onclick="modif_paragraphe(centrage_h1())">Original</h1>
    </div>
    <script>
        function modif_paragraphe(){
            var elem = document.getElementById('modif_paragraphe');
            elem.innerHTML = '<i>Corrigé</i>';
        }
        function centrage_h1(){
            var elem = document.querySelector("h1");
            elem.setAttribute('style', 'text-align: center');
        }
    </script>
</body>
</html>