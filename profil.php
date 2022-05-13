<?php
session_start();
// var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <div class="profilContainer">
        <img src="./uploads/<?= $_SESSION['image'] ?>" alt="">
        <div class="recap">
            <h1> <?= $_SESSION['pseudo'] ?> </h1>
            <h2> <?= $_SESSION['email'] ?></h2>
        </div>
    </div>
</body>
</html>