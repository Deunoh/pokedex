

<main class="container">
<?php foreach($viewData['pokemons'] as $pokemons): ?>
    <div class="pokemon-box">
        <a href="<?= $altorouter->generate('details', ['pokemonId' => $pokemons->getId()]); ?>"><img src="./img/<?= $pokemons->getNumber() ?>.png" alt="pokemon"></a>
        <h2>#<?= $pokemons->getNumber() ?> <?= $pokemons->getName() ?></h2>
    </div>
<?php endforeach; ?>
   

    
</main>