
<h1 class="titre-type">listes des types</h1>


<div class="container">
<?php foreach($viewData['types'] as $types): ?>
    <div class="types-box" style="background-color: #<?= $types->getColor() ?>;">
       <a href="<?= $altorouter->generate('typesById', ['typeId' => $types->getId()]); ?>"> <h2><?= $types->getName() ?></h2></a>
    </div>
<?php endforeach; ?>



    
</div>