<?php

function getBdd() {
    require_once __DIR__.'/connectDB.php';
    $bdd = connectDB();
    return $bdd;
}

?>