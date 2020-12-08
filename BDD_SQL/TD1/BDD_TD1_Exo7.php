<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>BDD_TD1_Exo7</title>
</head>
<body>
    <?php
        include("BDD_TD1_Menu.php");
    ?>
    <div>
        <h1>Exercice 7</h1>
        <p>Une société de transport routier veut installer un système d’information pour rendre plus efficace sa
            logistique. Embauché au service informatique de cette compagnie, vous êtes donc chargé de
            reprendre le travail déjà effectué (c’est à dire le MCD ci-dessous).</p>
        <p>Remarque :</p>
        <p>Une instance de l’association "Est Livré" met en relation 2 instances de l’entité "Entrepôt". (Une
            instance de l’ association "Est Livré" est par exemple la marchandise X (en quantité Q) est livrée par
            le camion I32-WS-59 par le conducteur Dupont le 6/11/97 au départ d’un entrepôt de Valenciennes
            et a I'arrivée d’un entrepôt de Paris.)</p>
        <p>1) Donnez et discutez les cardinalités manquantes de ce MCD ( (a,b) ?, (c,d) ?, (e,f) ?).</p>
        <p>a-b: 1-N</p>
        <p>c-d: 0-N</p>
        <p>e-f: 1-N</p>
        <p>2) Un conducteur peut-il avoir plusieurs permis ?</p>
        <p>Oui</p>
        <p>3) Un conducteur peut-il conduire plusieurs camions ?</p>
        <p>Oui</p>
        <p>4) Peut-il y avoir plusieurs conducteurs pour le même camion ?</p>
        <p>Non</p>
    </div>
</body>
</html>