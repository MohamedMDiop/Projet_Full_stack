<?php
try {
    if (!isset($_GET['id'])){
        echo "manque id";
    }else{
        $id = $_GET['id'];
        require("_connexion_bd.php");
        $query = $bdd->prepare('DELETE FROM culture WHERE id_culture =?');
        if($query->execute(array($id))){
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