<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../src/css/page.css">
        <title>test</title>
    </head>
    <body>
        <?php
            include("menu.php");
        ?>
        <?php
            $age=19;
            echo "<div>Vous avez $age ans.</div>";
            if ($age>=0 && $age<18) {
                echo "<div>Vous êtes mineur.</div>";
            }
            else {
                echo "<div>Vous êtes majeur.</div>";
            }
            for ($verre=0; $verre<3; $verre++) {
                echo "<div>Vous êtes à votre verre n°$verre</div>";
            }
            if ($verre>=4) {
                echo "<div>Vous êtes complétement torché maintenant. Vous venez de vomir votre 4h.</div>";
            }
            else {
                echo "<div>Vous êtes encore sobre.</div>";
            }
            $lunette=0;
            while ($lunette<6) {
                $lunette++;
            }
            echo "<div>Vos lunettes ont maintenant $lunette fisure</div>";
            $piche=8;
            echo "<div>Il y a $piche piche dans la salle.</div>";
            if ($piche>=5) {
                echo "<div>Les pompiers arrivent pour ramaser les piches.</div>";
            }
            else {
                echo "<div>Les pompiers viennent pas.</div>";
            }
        ?>
    </body>
</html>