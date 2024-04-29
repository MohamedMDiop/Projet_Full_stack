<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
<?php
    if(isset($_GET["etat"])){
      if($_GET["etat"] == 1){
        echo "<script>alert('Mots de passes incorrectes !');</script>";
      }
    }
?>
  <head>
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
              href="about.php"
              data-text="About"
              >About</a
            >
          </li>
        </ul>
          <!-------------------------Navbar-------------------------------->
      
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration or Sign Up form in HTML CSS | CodingLab</title>
    <link rel="stylesheet" href="../style/css/sign.css" />
    <link rel="stylesheet" href="../style/css/navbar.css" />
  </head>
  <body>
    <div class="wrapper">
      <h2>Inscription</h2>
      <form action="traitement/_sign.php" method="POST">
        <div class="input-box">
          <input type="text" placeholder="Entrez votre nom"  name="nom" required />
        </div>
        <div class="input-box">
          <input type="text" placeholder="Entrez votre numéro" name="login" required />
        </div>
        <div class="input-box">
          <input
            type="password"
            placeholder="Creer votre mot de passe"
            required
            name="mdp" 
          />
        </div>
        <div class="input-box">
          <input
            type="password"
            placeholder="Confirmer votre mot de passe"
            required
            name="mdp2" 
          />
        </div>
        <div class="policy">
          <input type="checkbox" />
          <h3>I accept all terms & condition</h3>
        </div>
        <div class="input-box button">
          <input type="Submit" value="Register Now" />
        </div>
        <div class="text">
          <h3>
            Vous avez déja un compte ?<a href="../page/login.php"
              >Connectez vous</a
            >
          </h3>
        </div>
      </form>
    </div>
  </body>
</html>
