<?php 
$title = "Infos";
require_once __DIR__.'/partials/header.php';
require __DIR__.'/functions/getBdd.php';
require __DIR__.'/functions/getPokemon.php';
require __DIR__.'/functions/getTypes.php';
require __DIR__.'/functions/idPokemonFormatted.php';

$pdo = getBdd();
$id = $_GET['id'];
$pokemon = getPokemon($id);

?>

<main class="infosContainer">
    <div class="infos">
        <h2><?php echo $pokemon['nom'] ?></h2>
        <div class="types">
            <div class="card-type-content" style="background-color: <?php echo getTypeColor($pokemon['type1']); ?>;">
                <img src="<?php echo getTypeIcone($pokemon['type1']); ?>" alt="Type grass">
                <p><?php echo getTypeName($pokemon['type1']); ?></p>
            </div>
            <?php if ($pokemon['type2'] != 0) { ?>
                <div class="card-type-content" style="background-color: <?php echo getTypeColor($pokemon['type2']); ?>;">
                    <img src="<?php echo getTypeIcone($pokemon['type2']); ?>" alt="Type poison">
                    <p><?php echo getTypeName($pokemon['type2']); ?></p>
                </div>
            <?php } ?>
        </div>
        <div class="stats">
            <div class="stat">
                <label for="HP">HP</label>
                <input type="range" class="slider" name="HP" min="0" max="100" value="<?php echo $pokemon['hp'] ?>" disabled/>
            </div>
            <div class="stat">
                <label for="attack">Attack</label>
                <input type="range" class="slider" name="attack" min="0" max="100" value="<?php echo $pokemon['attack'] ?>" disabled/>
            </div>
            <div class="stat">
                <label for="defense">Defense</label>
                <input type="range" class="slider" name="defense" min="0" max="100" value="<?php echo $pokemon['defense'] ?>" disabled/>
            </div>
            <div class="stat">
                <label for="attackSpe">Specific Attack</label>
                <input type="range" class="slider" name="attackSpe" min="0" max="100" value="<?php echo $pokemon['specific_attack'] ?>" disabled/>
            </div>
            <div class="stat">
                <label for="defenseSpe">Specific Defense</label>
                <input type="range" class="slider" name="defenseSpe" min="0" max="100" value="<?php echo $pokemon['specific_defense'] ?>" disabled/>
            </div>
            <div class="stat">
                <label for="speed">Speed</label>
                <input type="range" class="slider" name="speed" min="0" max="100" value="<?php echo $pokemon['speed'] ?>" disabled/>
            </div>
        </div>
        <h3>Evolution</h3>
        <div class="evolutions">
            
            <?php
            if ($pokemon['evo1'] != 0)
            {
                ?>

                <div class="evolution">
                    <img src="<?php echo '.' . getPokemon($pokemon['evo1'])['image'] ?>" alt="Pokemon image">
                    <h4><?php echo getPokemon($pokemon['evo1'])['nom'] ?></h4>
                </div>

                <?php
            }

            if ($pokemon['evo2'] != 0)
            {
                ?>

                <div class="evolution">
                    <img src="<?php echo '.' . getPokemon($pokemon['evo2'])['image'] ?>" alt="Pokemon image">
                    <h4><?php echo getPokemon($pokemon['evo2'])['nom'] ?></h4>
                </div>

                <?php
            }

            if ($pokemon['evo3'] != 0)
            {
                ?>

                <div class="evolution">
                    <img src="<?php echo '.' . getPokemon($pokemon['evo3'])['image'] ?>" alt="Pokemon image">
                    <h4><?php echo getPokemon($pokemon['evo3'])['nom'] ?></h4>
                </div>

                <?php
            }
            ?>
        </div>
    </div>
    <div class="infoImage">
        <div class="num"><?php echo idPokemonFormatted($pokemon['idPokemon']); ?></div>
        <img src="<?php echo '.' . $pokemon['image'] ?>" alt="Pokemon image">
    </div>
</main>

<?php 
require_once __DIR__.'/partials/footer.php';
?>