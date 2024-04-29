<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tableau récapitulatif</title>
    <link rel="stylesheet" href="style/css/stock.css" />
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
    
    <div class="container">
      <table class="tableau">
        <thead>
          <tr>
            <th>Ensemble de culture</th>
            <th>Quantité restante</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <select id="choixCulture">
                <option value="culture1">Culture 1</option>
                <option value="culture2">Culture 2</option>
                <option value="culture3">Culture 3</option>
              </select>
            </td>
            <td><span id="quantiteRestante">10</span></td>
          </tr>
        </tbody>
      </table>
    </div>

    <script src="style/js/stock.js"></script>
  </body>
</html>
