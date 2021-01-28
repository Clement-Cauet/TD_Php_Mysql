<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../src/css/page.css">
    <title>JS_Exo6</title>
</head>
<body>
    <?php
        include("JS_Menu.php");
    ?>
    <div>
        <p>On a un tableau tel que tab=[-2,1,4]</p>
        <button onclick="afficher(soustraction())">Calculer</button>
    </div>
    <script>
        function soustraction(x=0){
            var resultat;
            resultat = x-2;
            return resultat;
        }
        function afficher(resultat){
            var tab=[-2,1,4];
            for (var i = 0; i < tab.length; i++) {
                tab[i] += resultat;
                if(tab[i]<0){
                    tab[i]="Nombre négatif";
                }
            }
            alert("Le tableau est maintenant tab=["+tab[0]+","+tab[1]+","+tab[2]+"]");
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