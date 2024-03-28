<?php  ?> 

<section class="pokemon-container">
    <h2>Détails de <?= $viewData['pokemonDetails']->getName(); ?></h2>
    <div class="pokemon-flex">
        <img src="<?php echo $absoluteUrl ?>/img/<?= $viewData['pokemonDetails']->getNumber(); ?>.png" alt="pokemon">
        <div class="pokemon-details">
            <h3>#<?= $viewData['pokemonDetails']->getNumber(); ?> <?= $viewData['pokemonDetails']->getName(); ?></h3>
            <ul>
                <?php foreach ($viewData['pokemonType'] as $type): ?>
                <li class="type" style="background-color: #<?= $type->getColor() ?>;"><?= $type->getName() ?></li>
                <?php endforeach; ?>
            </ul>
            <h4>Statistiques</h4>
            <ul class="statistique-list">
                <li>PV<span><?= $viewData['pokemonDetails']->getHp(); ?></span></li>
                <li>Attaque<span><?= $viewData['pokemonDetails']->getAttack(); ?></span></li>
                <li>Défense<span><?= $viewData['pokemonDetails']->getDefense(); ?></span></li>
                <li>Attaque Spé<span><?= $viewData['pokemonDetails']->getSpe_attack(); ?></span></li>
                <li>Défense Spé<span><?= $viewData['pokemonDetails']->getSpe_defense(); ?></span></li>
                <li>Vitesse<span><?= $viewData['pokemonDetails']->getSpeed(); ?></span></li>
            </ul>
        </div>
    </div>
</section>