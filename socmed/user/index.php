<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
</head>
<body>
    <form action="login.php" method="POST">
        <h2>Connection</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>
            <label>Username</label>
            <input type="text" name="uname" placeholder="Username" required><br>
            <label>Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe" required><br>

            <button type="submit">Se connecter</button>
    </form>

    <p>Pas de compte ? Inscrivez-vous <a href="signup.php">ici</a></p>
</body>
</html>