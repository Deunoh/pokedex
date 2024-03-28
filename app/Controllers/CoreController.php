<?php


namespace App\Controllers;


class CoreController {


    public function show($viewName, array $viewData = []){
          // On demande à PHP d'aller chercher la variable $router pour pouvoir l'utiliser dans nos templates.
        //! C'est une mauvaise pratique. Elle passe outre les différents principes mis en place avec notre architecture. Donc on verra plus tard comment procéder autrement.
        global $altorouter;

        // Sur toutes les pages, on a besoin d'avoir accès à la variable $absoluteUrl. Celle-ci contient le chemin vers le dossier public et permet de générer les liens vers les assets.
        $absoluteUrl = $_SERVER['BASE_URI'];

        extract($viewData);

        require_once __DIR__ . '/../views/partials/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/partials/footer.tpl.php';
    }
}