<?php

require 'links/database.php';

$supp = $database->prepare("DELETE FROM poster WHERE id = :id");
$supp->execute(
    [
        "id" => $_POST['supp']
    ]
);

header("Location: index.php");