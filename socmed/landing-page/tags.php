<?php

require 'links/database.php';
$insert = $database->prepare("INSERT INTO tags (tag) VALUES (:tags)");
$insert->execute(
    [
        "tags" => $_POST['tag']
    ]
);


header("Location: index.php");