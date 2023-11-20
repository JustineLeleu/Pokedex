<?php
function getTypeName($idType) {
    $bdd = getBdd();
    $query = "SELECT type FROM pokemontype WHERE idtype = $idType";
    $stmt = $bdd->query($query);
    $typeName = $stmt->fetch(PDO::FETCH_ASSOC);
    return $typeName['type'];
}
function getTypeIcone($idType) {
    $bdd = getBdd();
    $query = "SELECT icone FROM pokemontype WHERE idtype = $idType";
    $stmt = $bdd->query($query);
    $typeIcone = $stmt->fetch(PDO::FETCH_ASSOC);
    // echo $typeIcone['icone'];
    return '.' . $typeIcone['icone'];
}
function getTypeColor($idType) {
    $bdd = getBdd();
    $query = "SELECT color FROM pokemontype WHERE idtype = $idType";
    $stmt = $bdd->query($query);
    $typeColor = $stmt->fetch(PDO::FETCH_ASSOC);
    // echo $typeColor['color'];
    return $typeColor['color'];
}

?>