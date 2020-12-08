<?php

try{
    $maBase=new PDO('mysql:host=192.168.64.175; dbname=TD2-Cauet_exo2; charset=utf8','user', 'user');
    echo "Accès à la base<br>";
    $reponseBDD = $maBase->query('SELECT * FROM Medecin');
    echo $reponseBDD->rowCount()." Tuple <br>";
    while($tableau = $reponseBDD->fetch()){
        echo $tableau["matricule"]." ".$tableau["nom"]." ".$tableau["prenom"]."<br>";
    }    
}
catch(Exception $e){
    echo "Erreur détecté".$e->getMessage();
}
?>

    <form action="" method="post">
        Nom<input type="text" name="nom">
        Prenom<input type="text" name="prenom">
        <input type="submit" value="submit">
    </form>


<?php


try{    
    if(isset($_POST['nom'])){
        $maBase=new PDO('mysql:host=192.168.64.175; dbname=TD2-Cauet_exo2; charset=utf8','user', 'user');
        

        $reponseconnexion = $maBase->query("SELECT * FROM `Medecin` WHERE `nom`='".$_POST['nom']."' AND `prenom` = '".$_POST['prenom']."'");

        if($reponseconnexion->rowCount()>=1){
            echo "Vous êtes connecté";
        }else{
            echo "Erreur lors de la connexion";
        };
    }
}catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
}

highlight_file(__FILE__);

?>