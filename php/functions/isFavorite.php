<?php

function isFavorite($id)
{
    $user = $_SESSION['user'];
    $bdd = getBdd();
    $query = "SELECT * FROM favorites_pokemon WHERE iduser = $user";
    $stmt = $bdd->query($query);
    $fav = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($fav as $value) 
    {
        if ($value['idPokemon'] == $id) return true;
    }

    return false;
}

?>