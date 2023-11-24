<?php
if (!isset($_SESSION))
{
    session_start();
}

$isLogin = false;

if (isset($_SESSION['user']))
{
    $isLogin = true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600&display=swap');
    </style>
    <title>Pokedex</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class="header">
        <img src="../assets/img/pokemon-logo.png" alt="Pokemon logo" class="logo">
        <nav class="nav">
            <a href="index.php" class="link">Pokemon</a>
            <a href="" class="link" <?php echo $isLogin ? '' : 'hidden' ; ?>>My account</a>
            <a href="logout.php" class="link" <?php echo $isLogin ? '' : 'hidden' ; ?>>Logout</a>
            <a href="register.php" class="link" <?php echo $isLogin ? 'hidden' : '' ; ?>>Register</a>
            <a href="login.php" class="link" <?php echo $isLogin ? 'hidden' : '' ; ?>>Login</a>
        </nav>
    </header>
