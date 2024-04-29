<?php
    //Recuperer les informations du formulaire
    $nom = $_POST["nom"];
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    $mdp2 = $_POST["mdp2"];
    $query = $bdd->prepare("INSERT INTO user (nom, `login`, mdp) VALUES (?, ?, ?)");
    $query->execute(array($nom, $login, $mdp));
    header('Location: ../stock.php');

?>



<?php 
$sql = "INSERT INTO culture (nom, quantite) VALUES ($nom, , value3, ...)";






?>