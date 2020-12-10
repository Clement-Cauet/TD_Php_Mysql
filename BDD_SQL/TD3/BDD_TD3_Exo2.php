<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>BDD_TD3_Exo2</title>
</head>
<body>
    <?php
        include("BDD_TD3_Menu.php");
    ?>
    <div>
        <h1>Exercice 2</h1>
        <p>Dans la base de données de consultation médicale, effectuer les requêtes suivantes. Rajouter un prix dans 
            la table Médicaments. (Ajouter des données dans votre base si vous n'avez pas de résultat).</p>
        <p>Rappel : Pour chaque requête, faites une capture d'écran de votre requête et une capture d'écran des 
            résultats affichés. Et ajoutez-les à votre site web d'exercice.</p>
        <p>Les patients qui commencent par la lettre B :</p>
        <img src="../src/img/likeb.png">
        <img src="../src/img/likeb2.png">
        <p>La liste des patients avec leur consultation :</p>
        <img src="../src/img/consultation1.png">
        <img src="../src/img/consultation2.png">
        <p>Les consultations qui ont eu lieu après 18h :</p>
        <img src="../src/img/heure.png">
        <img src="../src/img/heure2.png">
        <p>Les médecins (nom et prénom) par ordre alphabétique de nom :</p>
        <img src="../src/img/ordre.png">
        <img src="../src/img/ordre2.png">
        <p>Les médecins et leurs patients (sans doublon) :</p>
        <img src="../src/img/lien_medecin-patient.png">
        <img src="../src/img/lien_medecin-patient2.png">
        <p>Le nombre de médicaments référencés dans la base et le prix moyen :</p>
        <img src="../src/img/moyenne_prix.png">
        <img src="../src/img/moyenne_prix2.png">
        <p>Le nombre de médicaments par prescription :</p>
        <img src="../src/img/medicament-prescription.png">
        <img src="../src/img/medicament-prescription2.png">
        <p>Afficher les médicaments prescrits par 2 médecins et plus :</p>
        <img src="../src/img/medecin-medicament.png">
        <img src="../src/img/medecin-medicament2.png">
        <p>Afficher pour chaque patient la liste de médicament de leur dernière prescription :</p>
        <img src="../src/img/patient-medicament.png">
        <img src="../src/img/patient-medicament2.png">
    </div>
</body>
</html>