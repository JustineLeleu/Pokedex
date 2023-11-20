<?php

function getFilterPokemons($search) 
{
    $bdd = getBdd();
    $query = "SELECT * FROM pokemon WHERE nom LIKE '%$search%'";
    $stmt = $bdd->query($query);
    $arrAllPokemons = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arrAllPokemons;
}

?>