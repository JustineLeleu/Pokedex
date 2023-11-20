<?php

require __DIR__.'/functions/getBdd.php';
$bdd = getBdd();

if (isset($_POST['email'], $_POST['password']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $queryGetUser = "SELECT * FROM pokedexuser WHERE mail like '$email'";
    $arr = $bdd->query($queryGetUser)->fetch();

    if ($arr != null)
    {
        if ($arr["passeword"] == $password)
        {
            session_start();
            $_SESSION["user"] = $arr['iduser'];
            
            header("location: index.php");
        }
        else
        {
            echo "<script>alert('password incorrect')</script>";
        }
    }
    else
    {
        echo "<script>alert('email incorrect')</script>";
    }
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title;?> - Pokedex</title>
        <link href="/scss/style.css" type="text/css" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600;700;900&display=swap');
        </style>
    </head>
    <body>
        <?php
            include './partials/header.php';
        ?>
        <main>
            <div class="login">
                <h2>My Account</h2>
                <form method="post">
                    <label class="log" for="email">Email*</label>
                    <br>
                    <input type="text" class="loginfo" name="email" id="email">
                    <br>
                    <label class="log" for="password">Password*</label>
                    <br>
                    <input type="password" class="loginfo" name="password" id="password">
                    <br>
                    <input class="submit" type="submit" name="submit" value="Connexion">
                </form>
            </div>
        </main>
        <footer>
            <?php
                include './partials/footer.php';
            ?>
        </footer>
    </body>
</html>