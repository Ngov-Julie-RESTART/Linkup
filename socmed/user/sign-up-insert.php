<?php

require "../landing-page/links/database.php";
$insert = $database->prepare("INSERT INTO users (user_name, password) VALUES (:pseudo, :pw)");
$insert->execute(
    [
        "pseudo" => $_POST['user_name'],
        "pw" => $_POST['password']
    ]
);

$sql = "UPDATE myprofile SET pseudo='$_POST['user_name']' WHERE id=1";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

header("Location: index.php");