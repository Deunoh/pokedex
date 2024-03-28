<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $absoluteUrl ?>/css/style.css">
    <title>Pokédex</title>
</head>
<body>

<header>
   <a href="<?= $altorouter->generate('home') ?>"><h1>Pokédex</h1></a>
    <nav>
        <ul>
            <a href="<?= $altorouter->generate('home') ?>"><li>Liste</li></a>
            <a href="<?= $altorouter->generate('types') ?>"><li>Types</li></a>
            
        </ul>
    </nav> 
</header>
