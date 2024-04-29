<?php
try{
    //Recuperer les informations du formulaire
    $nom = $_POST["nom"];
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    $mdp2 = $_POST["mdp2"];

    //Verifier si mdp et mdp2 sont les memes
    if($mdp != $mdp2){
        header('Location: ../sign.php?etat=1');
    }else{
    //Verifier si le login est present dans la base de donnee
        require("_connexion_bd.php");
        $query = $bdd->prepare("SELECT * FROM user WHERE `login`=?");
        $query->execute(array($login));
        $nombre_ligne = $query->rowCount();
        if($nombre_ligne > 0){
            header('Location: ../login.php?etat=1');
        }else{
            $query = $bdd->prepare("INSERT INTO user (nom, `login`, mdp) VALUES (?, ?, ?)");
            $query->execute(array($nom, $login, $mdp));
            header('Location: ../stock.php');
        }
    }
}catch(PDOException $e){
    echo "Erreur: ".$e->getMessage();
}
?>