<?php
    include './partials/header.php';
?>

<link href="/scss/style.css" type="text/css" rel="stylesheet">

<div class="NewPkmn">
    <h2>New Pokemon</h2>
    <form method="POST">
        <div class="formulaire">
            <label class="new" for="pkmid">Pokemon official ID:</label>
            <input type="text" class="infonewpkmn" name="pkmid" id="id" required>

            <label class="new" for="pkmname">Pokemon name:</label>
            <input type="text" class="infonewpkmn" name="pkmname" id="pkmname" required>
            
            <label class="new" for="pkmtyp1">Pokemon Type 1:</label>
            <select class="infonewpkmn" name="pkmtyp1" id="id" required>
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
            <select class="infonewpkmn" name="pkmtype2" id="pkmtype2" required>
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

            
            <label class="new" for="pkmevo1">First Evolution:</label>
            <input type="text" class="infonewpkmn" name="pkmevo1" id="pkmevo1">

            <label class="new" for="pkmevo2">Second Evolution:</label>
            <input type="text" class="infonewpkmn" name="pkmevo2" id="pkmevo1">

            <label class="new" for="pkmimage">Pokemon Image:</label>
            <input type="file" class="infonewpkmn" name="pkmimage" id="pkmimage" required>

            <input class="submit" type="submit" name="submit" value="Add a Pokemon">
        </div>
    </form>
</div>

<?php
    include './partials/footer.php';

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=pokedex', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

?>