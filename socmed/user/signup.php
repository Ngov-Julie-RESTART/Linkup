<?php
require "../landing-page/links/database.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkUP / Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form class="form" method="POST" action="sign-up-insert.php">

            <input type="text" name="user_name" placeholder="Username" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">S'inscrire</button>
    </form>
    <p>Déjà un compte ? Connectez-vous <a href="index.php">ici</a></p>
</body>
</html>