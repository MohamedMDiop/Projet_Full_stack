<?php
    try{
        require("_connexion_bd.php");
        $query=$bdd->prepare('SELECT * FROM user WHERE `login`=? AND mdp=?');
        $query->execute(array(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['mdp'])));
        if($query1=$query->fetch()){
            setcookie('login', htmlspecialchars($_POST['login']),time()+365*24*3600,'/');
            setcookie('mdp', htmlspecialchars($_POST['mdp']),time()+365*24*3600,'/');
            header('Location: ../stock.php');
        } 
        else{
            header('Location: ../login.php?etat=2');
        }
    }
    catch(Exception $e){
        header('Location: ../login.php?etat=3');
    }
?>