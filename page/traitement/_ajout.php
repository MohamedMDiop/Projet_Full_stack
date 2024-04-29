<?php
    //Recuperer les informations du formulaire
    $nom = $_POST["nom"];
    $quantite = $_POST["quantite"];
    require("_connexion_bd.php");
    $sql = "INSERT INTO culture (nom, quantite) VALUES (?, ?)";
    $query = $bdd->prepare($sql);
    $query->execute(array($nom, $quantite));
    header('Location: ../stock.php');
?>
