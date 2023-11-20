
<?php

function idPokemonFormatted($id) {
    if ($id < 10) {
        return '#000' . $id;
    }
    elseif ($id < 100) {
        return '#00' . $id;
    }
    elseif ($id < 1000) {
        return '#0' . $id;
    }
    else {
        return '#' . $id;
    }
}

?>