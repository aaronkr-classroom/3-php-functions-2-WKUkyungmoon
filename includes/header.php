<?php
function write_logo() {
    echo '<img src="img/logo.png" alt="logo" />';
    //작은 따옴표로 시작하면, 중간은 큰 따옴표로 큰따옴표로 시작하면 중간은 작은 따옴표로 이어야 함.
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cahpter 3</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
<h1><?php write_logo(); ?> The Candy Store</h1>
<nav>
    <a href="index.php">Home</a> |
    <a href="candy.php">Candy</a> |
    <a href="about.php">About</a> |
    <a href="contact.php">Contact</a>
</nav>