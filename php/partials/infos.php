<?php 
$title = "Infos";
require_once __DIR__.'/header.php';
?>

<main class="main">
    <div class="infos">
        <h2>Bulbasaur</h2>
        <div class="types">
            <div class="card-type-content">
                <img src="/assets/img/type/grass.svg" alt="Type grass">
                <p>Grass</p>
            </div>
            <div class="card-type-content">
                <img src="/assets/img/type/poison.svg" alt="Type poison">
                <p>Poison</p>
            </div>
        </div>
        <div class="stats">
            <div class="stat">
                <label for="HP">HP</label>
                <input type="range" name="HP" min="0" max="100" value="90" step="10"/>
            </div>
            <div class="stat">
                <label for="attack">Attack</label>
                <input type="range" name="attack" min="0" max="100" value="90" step="10"/>
            </div>
            <div class="stat">
                <label for="defense">Defense</label>
                <input type="range" name="defense" min="0" max="100" value="90" step="10"/>
            </div>
            <div class="stat">
                <label for="attackSpe">Specific Attack</label>
                <input type="range" name="attackSpe" min="0" max="100" value="90" step="10"/>
            </div>
            <div class="stat">
                <label for="defenseSpe">Specific Defense</label>
                <input type="range" name="defenseSpe" min="0" max="100" value="90" step="10"/>
            </div>
            <div class="stat">
                <label for="speed">Speed</label>
                <input type="range" name="speed" min="0" max="100" value="90" step="10"/>
            </div>
        </div>
        <h3>Evolution</h2>
        <div class="evolutions">
            <div>
                <img src="/assets/img/pokemon/bulbasaur.png" alt="Pokemon image">
                <h4>Bulbasaur</h4>
            </div>
            <div>
                <img src="../../assets/img/pokemon/ivysaur.png" alt="Pokemon image">
                <h4>Ivysaur</h4>
            </div>
            <div>
                <img src="../../assets/img/pokemon/venusaur.png" alt="Pokemon image">
                <h4>Venusaur</h4>
            </div>
        </div>
    </div>
    <div class="img">
        <img src="/assets/img/pokemon/bulbasaur.png" alt="Pokemon image">
        <div>#0001</div>
    </div>
</main>

<?php 
require_once __DIR__.'/footer.php';
?>