
<?php foreach($arrAllPokemons as $pokemon) { ?>
    <div class="card-container">
        <div class="card-img">
            <img src="<?php echo '.' . $pokemon['image']; ?>" alt="Image de <?php echo $pokemon['nom']; ?>">
        </div>
        <div class="card-content">
            <p><?php echo idPokemonFormatted($pokemon['idPokemon']); ?></p>
            <h2>
                <?php echo $pokemon['nom']; ?>
            </h2>
            <div class="card-type-container">
                <div 
                    class="card-type-content"
                    style="background-color: <?php echo getTypeColor($pokemon['type1']); ?>;">
                    <img src="<?php echo getTypeIcone($pokemon['type1']); ?>" alt="Type grass">
                    <p><?php echo getTypeName($pokemon['type1']); ?></p>
                </div>
                <?php if ($pokemon['type2'] != 0) { ?>
                    <div 
                        class="card-type-content"
                        style="background-color: <?php echo getTypeColor($pokemon['type2']); ?>;">
                        <img src="<?php echo getTypeIcone($pokemon['type2']); ?>" alt="Type poison">
                        <p><?php echo getTypeName($pokemon['type2']); ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

