<?php
include "./partials/header.php";

$sendId = $_GET["sendId"]; 

try {
    $bdd = new PDO('mysql:host=localhost;dbname=pokedex', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query="SELECT * FROM pokemon WHERE idPokemon = $sendId;";
    $fetch = $bdd->query($query)->fetch(PDO::FETCH_ASSOC);

    $id=$fetch['idPokemon'];
    $name=$fetch['nom'];
    $type1=$fetch['type1'];
    $type2=$fetch['type2'];
    $hp=$fetch['hp'];
    $attack=$fetch['attack'];
    $defense=$fetch['defense'];
    $spatt=$fetch['specific_attack'];
    $spedef=$fetch['specific_defense'];
    $speed=$fetch['speed'];
    $evo1=$fetch['evo1'];
    $evo2=$fetch['evo2'];
    $image=$fetch['image'];
?>

<link href="/scss/style.css" type="text/css" rel="stylesheet">
<div class="NewPkmn">
    <h2>New Pokemon</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="formulaire">
            <label class="new" for="pkmid">Pokemon official ID:</label>
            <input type="text" class="infonewpkmn" name="pkmid" id="id" value=<?php echo $id?>>

            <label class="new" for="pkmname">Pokemon name:</label>
            <input type="text" class="infonewpkmn" name="pkmname" id="pkmname" value=<?php echo $name ?>>
            
            <label class="new" for="pkmtype1">Pokemon Type 1:</label>
            <select class="infonewpkmn" name="pkmtype1" id="id" value=<?php echo $type1?>>
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
            <select class="infonewpkmn" name="pkmtype2" id="pkmtype2" value=<?php echo $type2?>>
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
            <input type="text" class="infonewpkmn" name="pkmhp" id="id" value=<?php echo $hp ?>>

            <label class="new" for="pkmattack">Attack:</label>
            <input type="text" class="infonewpkmn" name="pkmattack" id="pkmattack" value=<?php echo $attack ?>>

            <label class="new" for="pkmdefense">Defense:</label>
            <input type="text" class="infonewpkmn" name="pkmdefense" id="pkmdefense" value=<?php echo $defense ?>>

            <label class="new" for="pkmspatt">Specific Attack:</label>
            <input type="text" class="infonewpkmn" name="pkmspatt" id="pkmspatt" value=<?php echo $spatt ?>>

            <label class="new" for="pkmspedef">Specific Defense:</label>
            <input type="text" class="infonewpkmn" name="pkmspedef" id="pkmspedef" value=<?php echo $spedef?>>

            <label class="new" for="pkmspeed">Speed:</label>
            <input type="text" class="infonewpkmn" name="pkmspeed" id="pkmspeed" value=<?php echo $speed?>>

            
            <label class="new" for="pkmevo1">First Evolution (ID):</label>
            <input type="text" class="infonewpkmn" name="pkmevo1" id="pkmevo1" value=<?php echo $evo1 ?>>

            <label class="new" for="pkmevo2">Second Evolution (ID):</label>
            <input type="text" class="infonewpkmn" name="pkmevo2" id="pkmevo2" value=<?php echo $evo2?>>

            <label class="new" for="pkmimage">Pokemon Image:</label>
            <input type="text" class="infonewpkmn" name="pkmimage" id="pkmimage" value=<?php echo $image?>>

            <input class="submit" type="submit" name="submit" value="Modify Pokemon">
        </div>
    </form>
</div>

<?php

if (isset($_POST['pkmid'])) {
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
    $image=$_POST['pkmimage'];

    $query="UPDATE pokemon
            SET idPokemon=?, nom=?, type1=?, type2=?, hp=?, attack=?, defense=?, specific_attack=?, specific_defense=?, speed=?, evo1=?, evo2=?, image=?
            WHERE idPokemon=$id";

    $prep=$bdd->prepare($query);
    $prep->bindValue(1, $id, PDO::PARAM_INT);
    $prep->bindValue(2, $name, PDO::PARAM_STR);
    $prep->bindValue(3, $type1, PDO::PARAM_STR);
    $prep->bindValue(4, $type2, PDO::PARAM_STR);
    $prep->bindValue(5, $hp, PDO::PARAM_INT);
    $prep->bindValue(6, $attack, PDO::PARAM_INT);
    $prep->bindValue(7, $defense, PDO::PARAM_INT);
    $prep->bindValue(8, $spatt, PDO::PARAM_INT);
    $prep->bindValue(9, $spedef, PDO::PARAM_INT);
    $prep->bindValue(10, $speed, PDO::PARAM_INT);
    $prep->bindValue(11, $evo1, PDO::PARAM_INT);
    $prep->bindValue(12, $evo2, PDO::PARAM_INT);
    $prep->bindValue(13, $image, PDO::PARAM_STR);

    $prep->execute();
    $prep->closeCursor();

    $prep=NULL;
    
    echo '
    <div class="updates">
        <p class="update">Your Pokemon has been updated successfully!</p>
        <button class="back"><a href="newPokemon.php">Back!</a></button>
    </div>';
}

} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

require "./partials/footer.php";
?>