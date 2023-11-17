<?php
// require_once __DIR__.'/functions/connectDB.php';
// $bdd = connectDB();

require __DIR__.'/functions/getBdd.php';
require __DIR__.'/functions/idPokemonFormatted.php';
require __DIR__.'/functions/getTypes.php';

require_once __DIR__.'/functions/getPokemons.php';
$arrAllPokemons = getPokemons();

// echo '<pre>';
// print_r($arrAllPokemons);
// echo '</pre>';
?>



<?php 
$title = "Home";
require_once __DIR__.'/partials/header.php';
?>

<main>
    <h1>Pokedex - Homepage</h1>
    <p>Hello  <strong>Pikachu</strong></p>
    <a href="/pokemon?name=pikachu">Pikachu</a>
    <div class="pokemon-grid">
        <?php
            require __DIR__.'/partials/card.php';
        ?>
    </div>
</main>

<?php 
require_once __DIR__.'/partials/footer.php';
?>