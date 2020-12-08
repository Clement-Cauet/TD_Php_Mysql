<?php
    session_start ();
    if(isset($_POST['submit2'])) {
        session_unset();
        session_destroy();
    }

    // On attend en parametre la clause where de la requete select patient
     
    function afficher_requet_select_patient($marequete1, $marequete2, $marequete3){
        
        try {
            $marequete = "SELECT `nom`,`prenom`,`numSS` FROM `Patient` WHERE ".$marequete1." ".$marequete2." ".$marequete3;
            echo $marequete;
            $BDD=new PDO('mysql:host=192.168.64.175; dbname=TD2-Cauet_exo2; charset=utf8','user','user');
            $donneeBrute=$BDD->query($marequete);
            $tableauDonnee=$donneeBrute;    
                         

            if  ($donneeBrute->rowCount()==0){
                echo '<p style="color:#FF0000";>Pas de réponse</p>';

            }else{
                ?>
                <table>
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
                <?php 
            }

        }catch(Exception $e){

        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
    <title>SQL_TD4_Exo2</title>
</head>
<body>
    <?php
        include("SQL_TD4_Menu.php");
    ?>
    <div>
        <h1>Exercice 2</h1>
        <p>Faire une fonction qui se nomme afficher_requet_select($marequete) et qui prend en paramètre une requête. Elle doit afficher les résultats de la requête dans un tableau
            HTML. Si la base ne retourne pas de résultat la fonction affichera "pas de résultat" en rouge.</p>
        <p>Appeler cette fonction avec les requêtes du TD3.</p>
        
        <form action="" method="post">
            <label for="name">SELECT `nom`,`prenom`,`numSS` FROM `Patient` WHERE </label>
            <select name="option1" id="option1">
                <option value="1">1</option>
                <option value="nom">nom</option>
                <option value="prenom">prenom</option>
                <option value="numSS">numSS</option>
            </select>
            <select name="option2" id="option2">
                <option value="">--</option>
                <option value="=">=</option>
                <option value="LIKE">LIKE</option>
                <option value="ORDER BY">ORDER BY</option>
            </select>
            <input type="text" name="recherche" id="recherche"> 
            <input type="submit" name="submit" value="Envoyer">
        </form>
<?php
        if(isset($_POST['recherche'])){
            afficher_requet_select_patient($_POST['option1'], $_POST['option2'], $_POST['recherche']);
        }else{
            
        }
?>
            <form action="" method="post">
                <input type="submit" name="submit2" value="Deconnexion">    
            </form>
        <div>
<?php    
                //code source//
                highlight_file((__FILE__));
?>
        </div>
    </div>
</body>
</html>