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
            include 'header.php';
        ?>
        <main>
            <div class="login">
                <h2>My Account</h2>
                <form method="GET">
                    <label class="log" for="email">Email*</label>
                    <br>
                    <input type="text" class="loginfo" name="email" id="email">
                    <br>
                    <label class="log" for="password">Password*</label>
                    <br>
                    <input type="text" class="loginfo" name="password" id="password">
                    <br>
                    <input class="submit" type="submit" name="submit" value="Connexion">
                </form>
            </div>
        </main>
        <footer>
            <?php
                include 'footer.php';
            ?>
        </footer>
    </body>
</html>