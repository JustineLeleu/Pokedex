<?php

function isFavorite($id)
{
    if (isset($_SESSION['user']))
    {
        $user = $_SESSION['user'];
        $bdd = getBdd();
        $query = "SELECT * FROM favorites_pokemon WHERE iduser LIKE '$user'";
        $stmt = $bdd->query($query);
        $fav = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($fav != null)
        {
            foreach ($fav as $value) 
            {
                if ($value['idPokemon'] == $id) return true;
            }
        }
    }

    return false;
}

?>