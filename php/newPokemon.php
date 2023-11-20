<link href="/scss/style.css" type="text/css" rel="stylesheet">

<?php
    include './partials/header.php';

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=pokedex', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $id=$_POST['pkmid'];
            $name=$_POST['pkmname'];
            $type1=$_POST['pkmtype1'];
            $type2=$_POST['pkmtype2'];
            $hp=$_POST['pkmhp'];
            $attack=$_POST['pkmattack'];
            $defense=$_POST['pkmdefense'];
            $spatt=$_POST['pkmspatt'];
            $spedef=$_POST['pkmspedef'];
            $speed=$_POST['pkmspeed'];
            $evo1=$_POST['pkmevo1'];
            $evo2=$_POST['pkmevo2'];
            // $image=$_POST['pkmimage'];

            $id=filter_input(INPUT_POST, 'pkmid', FILTER_SANITIZE_NUMBER_INT);
            $name=filter_input(INPUT_POST, 'pkmname', FILTER_SANITIZE_STRING);
            $type1=filter_input(INPUT_POST, 'pkmtype1', FILTER_SANITIZE_STRING);
            $type2=filter_input(INPUT_POST, 'pkmtype2', FILTER_SANITIZE_STRING);
            
            $hp=filter_input(INPUT_POST, 'pkmhp', FILTER_SANITIZE_NUMBER_INT);
            $attack=filter_input(INPUT_POST, 'pkmattack', FILTER_SANITIZE_NUMBER_INT);
            $spatt=filter_input(INPUT_POST, 'pkmspatt', FILTER_SANITIZE_NUMBER_INT);
            $spedef=filter_input(INPUT_POST, 'pkmspedef', FILTER_SANITIZE_NUMBER_INT);
            $speed=filter_input(INPUT_POST, 'pkmspeed', FILTER_SANITIZE_NUMBER_INT);
            
            $evo1=filter_input(INPUT_POST, 'pkmevo1', FILTER_SANITIZE_NUMBER_INT);
            $evo2=filter_input(INPUT_POST, 'pkmevo2', FILTER_SANITIZE_NUMBER_INT);

            $image = $_FILES['pkmimage'];
            if (isset($_FILES['pkmimage']) && $_FILES['pkmimage']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = './assets/img/pokemon/';
                $uploadFile = $uploadDir . basename($_FILES['pkmimage']['name']);
            
                if (move_uploaded_file($_FILES['pkmimage']['tmp_name'], $uploadFile)) {
                    $image = $uploadFile;
                } else {
                    // File upload failed
                }
            }

            $stmt = $bdd->prepare('INSERT INTO pokemon (idPokemon, nom, type1, type2, hp, attack, defense, specific_attack, specific_defense, speed, evo1, evo2, image) VALUES (:idPokemon, :nom, :type1, :type2, :hp, :attack, :defense, :specific_attack, :specific_defense, :speed, :evo1, :evo2, :image)');
            $stmt->execute([':idPokemon' => $id, ':nom' => $name, ':type1' => $type1, ':type2' => $type2, ':hp' => $hp, ':attack' => $attack, ':defense' => $defense, ':specific_attack' => $spatt, ':specific_defense' => $spedef, ':speed' => $speed, ':evo1' => $evo1, ':evo2' => $evo2, ':image' => $image]);

            echo '<div class="entered">
            <h3 class="good">Yeah! Your new Pokemon has been added correctly!</h3>
            <button class="back"><a href="newPokemon.php">Back</a></button>
            </div>';
            exit;
        }

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>

<div class="NewPkmn">
    <h2>New Pokemon</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="formulaire">
            <label class="new" for="pkmid">Pokemon official ID:</label>
            <input type="text" class="infonewpkmn" name="pkmid" id="id" required>

            <label class="new" for="pkmname">Pokemon name:</label>
            <input type="text" class="infonewpkmn" name="pkmname" id="pkmname" required>
            
            <label class="new" for="pkmtype1">Pokemon Type 1:</label>
            <select class="infonewpkmn" name="pkmtype1" id="id" required>
                <option value="1">Acier</option>
                <option value="2">Combat</option>
                <option value="3">Dragon</option>
                <option value="4">Eau</option>
                <option value="5">Elektric</option>
                <option value="6">Fée</option>
                <option value="7">Feu</option>
                <option value="8">Glace</option>
                <option value="9">Insect</option>
                <option value="10">Normal</option>
                <option value="11">Plante</option>
                <option value="12">Poison</option>
                <option value="13">Psy</option>
                <option value="14">Roche</option>
                <option value="15">Sol</option>
                <option value="16">Spectre</option>
                <option value="17">Ténèbre</option>
                <option value="18">Vol</option>
            </select>

            <label class="new" for="pkmtype2">Pokemon Type 2:</label>
            <select class="infonewpkmn" name="pkmtype2" id="pkmtype2">
                <option value="">None</option>
                <option value="1">Acier</option>
                <option value="2">Combat</option>
                <option value="3">Dragon</option>
                <option value="4">Eau</option>
                <option value="5">Elektric</option>
                <option value="6">Fée</option>
                <option value="7">Feu</option>
                <option value="8">Glace</option>
                <option value="9">Insect</option>
                <option value="10">Normal</option>
                <option value="11">Plante</option>
                <option value="12">Poison</option>
                <option value="13">Psy</option>
                <option value="14">Roche</option>
                <option value="15">Sol</option>
                <option value="16">Spectre</option>
                <option value="17">Ténèbre</option>
                <option value="18">Vol</option>
            </select>

            <label class="new" for="pkmhp">HP:</label>
            <input type="text" class="infonewpkmn" name="pkmhp" id="id" required>

            <label class="new" for="pkmattack">Attack:</label>
            <input type="text" class="infonewpkmn" name="pkmattack" id="pkmattack" required>

            <label class="new" for="pkmdefense">Defense:</label>
            <input type="text" class="infonewpkmn" name="pkmdefense" id="pkmdefense" required>

            <label class="new" for="pkmspatt">Specific Attack:</label>
            <input type="text" class="infonewpkmn" name="pkmspatt" id="pkmspatt" required>

            <label class="new" for="pkmspedef">Specific Defense:</label>
            <input type="text" class="infonewpkmn" name="pkmspedef" id="pkmspedef" required>

            <label class="new" for="pkmspeed">Speed:</label>
            <input type="text" class="infonewpkmn" name="pkmspeed" id="pkmspeed" required>

            
            <label class="new" for="pkmevo1">First Evolution (ID):</label>
            <input type="text" class="infonewpkmn" name="pkmevo1" id="pkmevo1">

            <label class="new" for="pkmevo2">Second Evolution (ID):</label>
            <input type="text" class="infonewpkmn" name="pkmevo2" id="pkmevo2">

            <label class="new" for="pkmimage">Pokemon Image:</label>
            <input type="file" class="infonewpkmn" name="pkmimage" id="pkmimage" required>

            <input class="submit" type="submit" name="submit" value="Add a Pokemon">
        </div>
    </form>
</div>

<?php
    include './partials/footer.php';
?>
