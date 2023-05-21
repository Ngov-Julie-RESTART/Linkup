<?php
require "../landing-page/links/database.php";
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  

    
    $insert = $database->prepare("INSERT INTO myprofile (user_id, pseudo, bio) VALUES (:userid, :psdo, :sign)");
    $insert->execute(
        [
            "userid" => $_POST['id'],
            "psdo" => $_POST['pseudo'],
            "sign" => $_POST['bio']
        ]
    );

    header("Location: profile.php");
}

else{
    header("Location: index.php");
    exit();
}

?>