<?php

function getPokemons() {
    $bdd = getBdd();
    $query = 'SELECT * FROM pokemon';
    $stmt = $bdd->query($query);
    $arrAllPokemons = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arrAllPokemons;
}
$arrAllPokemons = getPokemons();

// echo '<pre>';
// print_r($arrAllPokemons);
// echo '</pre>';
?>