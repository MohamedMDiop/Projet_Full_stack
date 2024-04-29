<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../style/css/login.css" />
    <link rel="stylesheet" href="../style/css/navbar.css" />
  </head>
  <?php
  
    if(isset($_GET["etat"])){
      if($_GET["etat"] == 1){
        echo "<script>alert('Ce login existe deja !');</script>";
      }
    }
  ?>
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
                href="about.php"
                data-text="About"
                >About</a
              >
            </li>
          </ul>
          <!-------------------------/Navbar-------------------------------->
      
    <div class="login-page">
      <div class="form">
        <form class="register-form">
          <input type="text" placeholder="name" />
          <input type="password" placeholder="password" />
          <input type="text" placeholder="email address" />
          <button>create</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form">
          <input type="text" placeholder="username" />
          <input type="password" placeholder="password" />
          <button>login</button>
          <p class="message">
            Not registered? <a href="sign.php">Create an account</a>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
