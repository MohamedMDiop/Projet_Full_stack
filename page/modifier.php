<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="fr" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page d'enregistrement d'un nouveau produit</title>
    <link rel="stylesheet" href="../style/css/sign.css" />
    <link rel="stylesheet" href="../style/css/navbar.css" />
  </head>
  <body>
    <!-------------------------Navbar-------------------------------->
    <ul>
      <li>
        <a href="../index.php" data-text="Home"
          >Home</a
        >
      </li>
      <li>
        <a href="../page/login.php" data-text="Connexion"
          >Connexion</a
        >
      </li>
      </li>
      <li>
        <a
          href="../page/sign.php"
          data-text="Inscription"
          >Inscription</a
        >
      </li>
      <li>
        <a
          href="../page/stock.php"
          data-text="About"
          >Stock</a
        >
      </li>
    </ul>
    <!-------------------------Navbar-------------------------------->
    <div class="wrapper">
      <h2>Enregistrement</h2>
      <?php
        require('traitement/_connexion_bd.php');
        if(!isset($_GET['id'])){
            header("Location: stock.php");
        }
        $id = $_GET['id'];
        $query = $bdd->prepare('SELECT * FROM culture WHERE id_culture = ?');
        $query->execute(array($id));
        $row = $query->fetch(PDO::FETCH_ASSOC);
      ?>
      <form action="traitement/_modifier.php?id=<?php echo $row['id_culture'] ?>" method="POST">
        <div class="input-box">
          <input type="text" placeholder="Entrez votre produit" name="nom" value="<?php echo $row['nom'] ?>" />
        </div>
        <div class="input-box">
          <input type="text" placeholder="Entrez la quantité" name="quantite" value="<?php echo $row['quantite'] ?>" required />
        </div>
        <div class="input-box button">
          <input type="Submit" value="Enregistrer" />
        </div>
      </form>
    </div>
  </body>
</html>
