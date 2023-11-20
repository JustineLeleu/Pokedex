<?php
// require_once __DIR__.'/functions/connectDB.php';
// $bdd = connectDB();

require __DIR__.'/functions/getBdd.php';
require __DIR__.'/functions/idPokemonFormatted.php';
require __DIR__.'/functions/getTypes.php';
require_once __DIR__.'/functions/getPokemons.php';
require_once __DIR__.'/functions/getFilterPokemons.php';
require __DIR__.'/functions/isFavorite.php';

if (isset($_POST['search']))
{
    $arrAllPokemons = getFilterPokemons($_POST['search']);
    echo "<script>console.log('search')</script>";
}
else
{
    $arrAllPokemons = getPokemons();
    echo "<script>console.log('no search')</script>";
}

?>



<?php 
$title = "Home";
require_once __DIR__.'/partials/header.php';
?>

<main>
    <form action="index.php" method="post" class="searchBar">
        <input type="text" placeholder="Pokemon" name="search" class="searchInput">
        <input type="submit" value="Search" class="searchButton">
    </form>
    <div class="pokemon-grid">
        <?php
            require __DIR__.'/partials/card.php';
        ?>
    </div>
</main>

<?php 
require_once __DIR__.'/partials/footer.php';
?>