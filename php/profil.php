<?php
    require_once __DIR__.'./partials/header.php';
    require __DIR__.'/functions/getBdd.php';
    require __DIR__.'/functions/getuser.php';
    


?>
<main>
    <img src="" alt="">
    <h1>Pseudo: <?= getUser($user["pseudo"]);?></h1>
    <p>Email: <?= getUser($user["mail"]);?></p>
</main>

<?php
    require_once __DIR__.'./partials/footer.php';
?>