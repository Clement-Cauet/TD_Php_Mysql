<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo14</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <h1>Exercice 14</h1>
        <button id="init" onclick="init()">Init</button>
        <form>
            <input type="text" id="text" value="" placeholder="Ecrire un nom" required>
            <input type="submit" id="envoyer" value="Envoyer">
            <input type="submit" id="reset" value="Reset">
        </form>
    </div>
    <script>
        document.getElementById("envoyer").style.display="none";
        document.getElementById("reset").style.display="none";
        function init(){
            var saisi = document.getElementById("text").value;
            var envoyer = document.getElementById("envoyer");
            addEventListener("click", fctSubmit(), false);
            var reset = document.getElementById("reset");
            addEventListener("click", remise_a_zero(), false);
            function fctSubmit(){
                alert("Le nom est : "+saisi);
            }
            function remise_a_zero(){
                alert("Remise à zéro du formulaire");
                document.getElementById("text").value = "";
            }
        }
    </script>
</body>
</html>