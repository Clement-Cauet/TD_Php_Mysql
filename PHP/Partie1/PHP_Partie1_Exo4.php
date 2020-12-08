<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>PHP_Partie1_Exo4</title>
</head>
<body>
    <?php
        include("PHP_Partie1_Menu.php");
    ?>
    <div>
        <h1>Exercice 4</h1>
        <p>Créer un petit programme php qui résout une équation du second degré de type
            Ax2 + Bx + C = 0. Comme on ne maitrise pas pour le moment les entrées utilisateur les variables A, B et C
            seront rentré manuellement dans le programme.</p>
        <?php
            
            $a=3;
            $b=-6;
            $c=-8;
            $x1=0;
            $x2=0;

            $D=$b*$b-(4*$a*$c);
            echo 'Delta est egale a : '.$D. '<br>';

            if ($D>0){
                $x1=-($b-sqrt($D))/2*$a;
                echo 'Solution 1 : '.$x1. '<br>';
                $x1=-($b+sqrt($D))/2*$a;
                echo 'Solution 2 : '.$x2. '<br>';
            }

            if ($D=0){
                $x1=-$b/2*$a;
                echo 'Solution : '.$x1. '<br>';
            }

            if ($D<0){
                echo "Il n'y a pas de solution dans R.";
            }

        ?>
        <div>
        <?php
            //code source//
            echo '<p>Code Source :</p>';
            highlight_file((__FILE__));
        ?>
        </div>
    </div>
</body>
</html>