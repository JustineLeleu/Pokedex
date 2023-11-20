<!-- <link href="/scss/style.css" type="text/css" rel="stylesheet"> -->
<?php

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=pokedex', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($isLogin)
            {
                $iduser = $_SESSION['user'];
                $idPokemon = $_POST['idPokemon'];

                if (isFavorite($idPokemon))
                {
                    $sql = "DELETE FROM favorites_pokemon WHERE iduser = $iduser AND idPokemon = $idPokemon";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                }
                else
                {
                    $sql = "INSERT INTO favorites_pokemon (iduser, idPokemon) VALUES (:iduser, :idPokemon)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([':iduser' => $iduser, ':idPokemon' => $idPokemon]);
                }
            }
            else
            {
                header("location: login.php");
            }
        }
    
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
?>
