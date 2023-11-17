<?php
    require_once __DIR__.'./partials/header.php';

    $pdo = new PDO('mysql:host=localhost;dbname=pokedex', 'root', 'root');
?>
<main>
    <div class="register">
        <h2>Register</h2>
        <form method="POST">
            <label class="reg" for="pseudo">Pseudo*</label>
            <br>
            <input type="text" class="reginfo" name="pseudo" id="pseudo" minlength="3" maxlength="45" required>
            <br>
            <label class="reg" for="email">Email*</label>
            <br>
            <input type="email" class="reginfo" name="email" id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
            <br>
            <label class="reg" for="password">Password*</label>
            <br>
            <input type="password" class="reginfo" name="password" id="password" minlength="6" maxlength="45" required>
            <br>
            <label class="reg" for="passwordverif">Password Verification*</label>
            <br>
            <input type="password" class="reginfo" name="passwordverif" id="passwordverif" minlength="6" maxlength="45" required>
            <br>
            <input class="submit" type="submit" name="submit" value="Connexion">
        </form>
    </div>
</main>
<?php
    require_once __DIR__.'./partials/footer.php';
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// echo "test";

// $sanitizedData = array();
// fonction de validation et de traitement des données du formulaire

$pseudo = "";
$email = "";
$password = "";
$passwordverif = "";

function validateAndSanitizeRegister(&$pseudo, &$email, &$password, &$passwordverif) {
    
// echo "test2";
    if (isset($_POST["pseudo"]) and !empty($_POST["pseudo"]) and strlen($_POST["pseudo"]) > 2 and strlen($_POST["pseudo"]) < 45) {
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        // echo "test pseudo";
    } else {
        echo "A valide pseudo is required";
        return;
    }

    if (isset($_POST["email"]) and !empty($_POST["email"]) and preg_match("/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$/", $_POST["email"])) {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        // echo "test email";
    } else {
        echo "A valide email is required";
        return;
    }

    if (isset($_POST["password"]) and !empty($_POST["password"]) and strlen($_POST["password"]) > 6 and strlen($_POST["password"]) < 45) {
        $password = htmlspecialchars($_POST["password"]);
        // echo "test password";
    } else {
        echo "A valide password is required";
        return;
    }

    if (isset($_POST["passwordverif"]) and !empty($_POST["passwordverif"]) and $_POST["passwordverif"] === $_POST["password"]) {
        $passwordverif = htmlspecialchars($_POST["passwordverif"]);
        // echo "test passwordverif";
    } else {
        echo "A valide password verification is required";
        return;
    }

    if (isset($pseudo) and isset($email) and isset($password) and isset($passwordverif)) {
        echo "Thank you for your registration!";
        echo "<script>console.log('test1')</script>";
        $sanitizedData = array(
            "pseudo" => $pseudo,
            "email" => $email,
            "password" => $password,
            "passwordverif" => $passwordverif
        );
        return true;

    }
    
}

// fonction d'injection de donnée du formulaire apres traitement des données

function dataInjection($email, $password, $pseudo) {
    global $pdo;
    echo "  test fonction dataInjection   ";
    try{
    $sqlreq1 = $pdo->query("SELECT pseudo FROM pokedexuser WHERE pseudo = $pseudo")->fetch();
    //$arr = $sqlreq1->execute();
    echo "<script>console.log($sqlreq1)</script>";

    if ($sqlreq1 != null) {
        echo "This email is already used";
    } else {
        echo 'test';
        $sqlreq2 = $pdo->prepare("INSERT INTO `pokedexuser`(`pseudo`, `mail`, `passeword`, `admin`) 
        VALUES ($pseudo, $password, '$email', 0)");
        $sqlreq2->execute();
    }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

// // appel d'injection de donnée au click du bouton submit

if(array_key_exists('submit', $_POST)) {

    // $sanitizedData = validateAndSanitizeRegister($_POST);
    // echo "<script>console.log($sanitizeData)</script>";
    // echo $sanitizedData;
    if (validateAndSanitizeRegister($pseudo, $email, $password, $passwordverif)) {
        echo "<script>console.log('testing')</script>";
        //echo "<script>console.log($email)</script>";
        dataInjection($email, $password, $pseudo);
    }
}


?>