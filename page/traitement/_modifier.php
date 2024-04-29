<?php
try {
    if (!isset($_GET['id']) && !isset($_POST['nom']) && !isset($_POST['quantite'])){
        echo "Un manque";
    }else{
        $id = $_GET['id'];
        extract($_POST);
        require("_connexion_bd.php");
        $query = $bdd->prepare('UPDATE culture SET nom=?, quantite=? WHERE id_culture =?');
        if($query->execute(array($nom, $quantite, $id))){
            header('Location: ../stock.php');
            //echo "ok";
        }else {
            echo "Erreur lors de l'exécution de la requête : " . $query->errorInfo()[2];
        }
    }
}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}
?>