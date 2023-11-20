<?php

function getPokemon($id) 
{
    $bdd = getBdd();
    $query = "SELECT * FROM pokemon WHERE idPokemon = $id";
    $stmt = $bdd->query($query);
    $pokemon = $stmt->fetch(PDO::FETCH_ASSOC);
    return $pokemon;
}

?>