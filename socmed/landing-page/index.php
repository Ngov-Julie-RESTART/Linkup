<?php

require "links/database.php";

$requete = $database->prepare("SELECT * FROM poster ORDER BY date DESC");
$requete->execute();
$Allposts = $requete->fetchAll(PDO::FETCH_ASSOC);

$requete = $database->prepare("SELECT * FROM tags");
$requete->execute();
$AllTags = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkUP</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/d46d8a5065.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>

<body>

<!-- Bouton poster -->
    <p class="floating-button">
        <a href="#" onclick="openPost();"><i class="fa-solid fa-pen"></i></a>
    </p>



<!--Forme pour faire un poste-->
    <section class="make-post" id="make-post">
        <h2 class="title-post">Ecrire un poste</h2>
        <form class="form" method="POST" action="insert-post.php">
            <input type="text" name="poster" placeholder="Quoi de neuf ?" required>
            
            <div class="tags">
                <?php foreach($AllTags as $tag) { ?>
                <button type="button" class="btn" id="<?= $tag['tag'] ?>"><?= $tag['tag'] ?></button>
                <?php } ?>
            </div>

            <div class="bottom-post">
                <p><a href="#"><i class="fa-solid fa-image"></i></a></p>
                <div class="buttons">
                    <button type="submit">Publier</button>
                    <button onclick="closePost();">Annuler</button>
                </div>
            </div>
            
        </form>
    </section>



<!-- Header -->
    <header>
        <div class="left-header">
            <a href="#" onclick="NavMenu()"><i class="fa-solid fa-bars"></i></a>
            <h2 class="logo">LinkUP</h2>
        </div>
        <form action="" class="search">
            <input type="search" name="search" placeholder="Recherche">
            <button type="submit">Search</button>
        </form>
    </header>


    <section id="side-bar-mobile">
            <div class="propriete">
                <p><i class="fa-solid fa-user-plus"></i><a href="../user/signup.php">Inscription</a></p>
                <p><i class="fa-solid fa-right-to-bracket"></i><a href="../user/index.php">Connection</a></p>
                <p><i class="fa-solid fa-gear"></i><a href="#">Réglages</a></p>
            </div>
        </section>

<main>

        <!--Barre gauche-->
        <section class="side-bar">
            <div class="propriete">
                <p><i class="fa-solid fa-user-plus"></i><a href="../user/signup.php">Inscription</a></p>
                <p><i class="fa-solid fa-right-to-bracket"></i><a href="../user/index.php">Connection</a></p>
                <p><i class="fa-solid fa-gear"></i><a href="#">Réglages</a></p>
            </div>
        </section>

        <!--Time line-->
        <section class="all-posts">

            <!--Postes-->
            <?php foreach($Allposts as $posts) { ?>
            <div class="post">
                <div class="pfp-post">
                    <img src="img/NGOV_Julie_RESTART1_SCENE.png" alt="pfp">
                </div>
                <section class="info-post">
                    <div class="top-post">
                        <div class="name-post">
                            <h2>Pseudo</h2>
                            <p>@username</p>                            
                        </div>
                        <a href="#" onclick="openPopup();"><i class="fa-solid fa-trash"></i></a>
                    </div>

                    <div class="text-post">
                        <p><?= $posts['contenu'] ?></p>
                    </div>

                    <div class="img-post">
                    <!--    <img src="" alt="image"> -->
                    </div>
                </section>
            </div>
            
            <div class="icon-post">
                <p class="heart"><i class="fa-solid fa-heart"></i><a href="#">0</a></p>
                <p class="comment"><i class="fa-sharp fa-solid fa-comment"></i><a href="#">0</a></p>
                <button class="btn">Divers</button>
            </div>

            <!--Forme Supprimer-->
            <section class="supp" id="remove">
                <h2>Voulez-vous supprimer ce poste ?</h2>
                <div class="select-yn">
                    <form action="delete.php" method="POST">
                        <input type="hidden" name="supp" value="<?= $posts['id'] ?>">
                        <button type="submit">Oui</button>
                        <button type="button" onclick="closePopup();">Non</button>
                    </form>
                </div>
            </section>
            <?php } ?>
        </section>
        

        <section class="AllTags">
            <h2>Trier par tags</h2>
            <div class="tags">
                <button class="btn" id="all">All</button>
                <?php foreach($AllTags as $tag) { ?>
                    <button class="btn" id="<?= $tag['tag'] ?>"><?= $tag['tag'] ?></button>
                <?php } ?>
                <form class="form" method="POST" action="tags.php">
                    <input class="tags" type="text" name="tag" placeholder="New tag">
                </form>
            </div>
        </section>
</main>


    <footer>
    </footer>

<script src="java.js"></script>
</body>
</html>