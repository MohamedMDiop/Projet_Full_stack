<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tableau récapitulatif</title>
    <link rel="stylesheet" href="../style/css/stock.css" />
    <link rel="stylesheet" href="../style/css/navbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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
            <a href="login.php" data-text="Connexion"
              >Connexion</a
            >
          </li>
          </li>
          <li>
            <a
              href="sign.php"
              data-text="Inscription"
              >Inscription</a
            >
          </li>
          <li>
            <a
              href="stock.php"
              data-text="About"
              >Stock</a
            >
          </li>
        </ul>
        <!-------------------------Navbar-------------------------------->
    
    <div class="container">
      <a href="ajout.php">
        <div class="input-box button">
              <input type="Submit" value="Ajouter une nouvelle culture" />
        </div>
      </a>
      <table class="tableau">
        <thead>
          <tr>
            <th>Ensemble de culture</th>
            <th>Quantité restante</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            require("traitement/_connexion_bd.php");
            $query = $bdd->query("SELECT * FROM culture");
            while($res=$query->fetch()){
              echo'
              <tr>
                <td>
                  <span id="quantiteRestante">'.$res['nom'].'</span>
                </td>
                <td>
                  <span id="quantiteRestante">'.$res['quantite'].'</span>
                </td>
                <td>
                    <a href="modifier.php?id='.$res['id_culture'].'"><i class="fa fa-pen" style="margin-right: 20px;"></i></a>
                    <a href="traitement/_supprimer.php?id='.$res['id_culture'].'"><i class="fa fa-trash" style="color: red;"></i>
                </td>
              </tr>
              ';
            }
          ?>
        </tbody>
      </table>
    </div>

    <script src="style/js/stock.js"></script>
  </body>
</html>
