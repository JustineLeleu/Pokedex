<?php

function getUser($id) 
{
    $bdd = getBdd();
    $query = "SELECT * FROM pokedexuser WHERE iduser = $id";
    $stmt = $bdd->query($query);
    $pokemon = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

?>