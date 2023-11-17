<?php
    include 'header.php';
?>
<main>
    <div class="register">
        <h2>Register</h2>
        <form method="POST">
            <label class="reg" for="pseudo">Pseudo*</label>
            <br>
            <input type="text" class="pseudoinfo" name="pseudo" id="pseudo" minlength="3" maxlength="45" require>
            <br>
            <label class="reg" for="email">Email*</label>
            <br>
            <input type="email" class="reginfo" name="email" id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
            <br>
            <label class="reg" for="password">Password*</label>
            <br>
            <input type="password" class="reginfo" name="password" id="password" minlength="6" maxlength="45" require>
            <br>
            <label class="reg" for="passwordverif">Password Verification*</label>
            <br>
            <input type="password" class="reginfo" name="passwordverif" id="passwordverif" minlength="6" maxlength="45" require>
            <br>
            <input class="submit" type="submit" name="submit" value="Connexion">
        </form>
    </div>
</main>
<?php
    include 'footer.php';
?>

<?php

$pdo = new PDO('mysql:host=localhost;dbname=pokedex', 'root', 'root');

function validateAndSanitizeRegister($_post) {

    if (isset($_POST["pseudo"]) and !empty($_POST["pseudo"]) and strlen($_POST["pseudo"]) > 2 and strlen($_POST["pseudo"]) < 45) {
        $firstName = htmlspecialchars($_POST["pseudo"]);
    } else {
        echo "A valide pseudo is required";
    }

    if (isset($_POST["email"]) and !empty($_POST["email"]) and preg_match("/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$/", $_POST["email"])) {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    } else {
        echo "A valide email is required";
    }

    if (isset($_POST["password"]) and !empty($_POST["password"]) and strlen($_POST["password"]) > 6 and strlen($_POST["password"]) < 45) {
        $password = htmlspecialchars($_POST["password"]);
    } else {
        echo "A valide password is required";
    }

    if (isset($_POST["passwordverif"]) and !empty("passwordverif") and $_POST["passwordverif"] = $_POST["password"]) {
        $passwordverif = htmlspecialchars($_POST["passwordverif"]);
    } else {
        echo "A valide password verification is required";
    }

    if (isset($pseudo) and isset($email) and isset($password) and isset($passwordverif)) {
        echo "Thank you for your registration!";
        return $sanitizedData = array(
            "pseudo" => $pseudo,
            "email" => $email,
            "password" => $password,
            "passwordverif" => $passwordverif
        );
    }

}

function dataInjection() {
    try{
    $sanitizedData = validateAndSanitizeRegister($_POST);
    $sqlreq = $pdo->prepare("INSERT INTO `pokedexuser`(`pseudo`, `mail`, `passeword`, `admin`) VALUES '$pseudo','$password','$email','0' WHERE NOT EXISTS (SELECT * FROM `pokedexuser` WHERE `mail` = '$email')");
    $pdo->exec($sqlReq);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>