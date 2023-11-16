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
            <div class="register">
                <h2>Register</h2>
                <form method="GET">
                    <label class="reg" for="email">Email*</label>
                    <br>
                    <input type="text" class="reginfo" name="email" id="email">
                    <br>
                    <label class="reg" for="password">Password*</label>
                    <br>
                    <input type="text" class="reginfo" name="password" id="password">
                    <br>
                    <label class="reg" for="passwordverif">Password Verification*</label>
                    <br>
                    <input type="text" class="reginfo" name="passwordverif" id="passwordverif">
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