<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo12</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <h1>Exercice 12</h1>
        <button id="newWindow" onclick="openWin()">Nouvelle fenêtre</button>
        <button id="bouton1" onclick="bouton1()">Bouton 1</button>
        <button id="bouton2" onclick="bouton2()">Bouton 2</button>
        <button id="bouton3" onclick="bouton3()">Bouton 3</button>
    </div>
    <script>
        var myWindow;
        
        function openWin() {
            myWindow=window.open("", "myWindow", "width=300, height=200");
            myWindow.document.write("<p>Nouvelle Fenêtre</p>");
        }
        
        function bouton1() {
            myWindow.moveTo(50, 50);
            myWindow.focus();
        }
        function bouton2(){
            myWindow.moveBy(50, 50);
            myWindow.focus();
        }
        function bouton3(){
            myWindow.resizeBy(100, -100)
        }
    </script>
</body>
</html>