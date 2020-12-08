<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>SQL_TD4_Exo1</title>
</head>
<body>
    <?php
        include("SQL_TD4_Menu.php");
    ?>
    <div>
        <h1>Exercice 1</h1>
        <p>Mettre en place le code PHP du cours et tenter de faire votre première requête sur la base des consultations 
            médicales ( exemple select * from patient ) et afficher le résultat sur votre site.</p>
        
        <?php
            $BDD=new PDO('mysql:host=192.168.64.175; dbname=TD2-Cauet_exo2; charset=utf8','user','user');
            $donneeBrute=$BDD->query("SELECT `nom`,`prenom`,`numSS` FROM `Patient` WHERE 1");
            $tableauDonnee=$donneeBrute;
            ?><table>
                    <tbody>
                        <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>NumSS</td>
            <?php
            while($tableauDonnee=$donneeBrute->fetch()){
                echo'<tr>
                        <td>'.$tableauDonnee["nom"].'</td>
                        <td>'.$tableauDonnee["prenom"].'</td>
                        <td>'.$tableauDonnee["numSS"].'</td>
                    </tr>';
            }
        ?>
                </tbody>
            </table>

        <div>
            <?php    
                //code source//
                highlight_file((__FILE__));
            ?>
        </div>
    </div>
</body>
</html>