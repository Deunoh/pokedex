
<main class="container">
<?php foreach($viewData['pokemonsByTypes'] as $pokemons): ?>
    <div class="pokemon-box">
        <a href=""><img src="./../img/<?= $pokemons->getNumber() ?>.png" alt="pokemon"></a>
        <h2>#<?= $pokemons->getNumber() ?> <?= $pokemons->getName() ?></h2>
    </div>
<?php endforeach; ?>
   

    
</main>