<?php
// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['majeur'])) {
        if ($_POST['majeur'] === 'oui') {
            
            header('Location: index.html');
            exit;
        } else {
            
            header('Location: interdit.html');
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vérification</title>
  <link rel="stylesheet" href="css/majeur.css" />
  <link rel="stylesheet" href="css/accueil.css" />
  <link rel="shortcut icon" href="images/S-logo bière.webp" type="image/x-icon" />
</head>

<body>
  <h1>Êtes-vous majeur ?</h1>
  <div id="choix">
    <form method="post" action="">
      <ul>
        <li><button type="submit" name="majeur" value="oui"><h2>Oui</h2></button></li>
        <li><button type="submit" name="majeur" value="non"><h2>Non</h2></button></li>
      </ul>
    </form>
  </div>
</body>

</html>
