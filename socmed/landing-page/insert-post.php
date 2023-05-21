<?php

require 'links/database.php';
$insert = $database->prepare("INSERT INTO poster (contenu) VALUES (:write)");
$insert->execute(
    [
        "write" => $_POST['poster']
    ]
);


header("Location: index.php");