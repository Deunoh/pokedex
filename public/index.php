<?php
    use App\Controllers\MainController;

    // On inclut automatiquement grâce à composer toutes les librairies/dépendances
    include __DIR__ . '/../vendor/autoload.php';
   

    // par défaut
    $page = "/";

    // si la variable page est passée en query string et qu'elle est remplit
    if(isset($_GET['page']) && !empty($_GET['page'])) {
        // on mets à jour le contenu de la page affichée
        $page = $_GET['page'];
    }

    // On va créer notre objet altorouter
    $altorouter = new AltoRouter();

    $baseUri = $_SERVER['BASE_URI'];
    $altorouter->setBasePath($baseUri);
    $altorouter->map( 
        'GET',   
        '/', 
        [ 'controller' => MainController::class, 'method' => 'homeAction' ],
        'home' 
    );

    $altorouter->map( 
        'GET',   
        '/details/[i:pokemonId]', 
        [ 'controller' => MainController::class, 'method' => 'detailsAction' ], 
        'details' 
    );

    $altorouter->map( 
        'GET',   
        '/types', 
        [ 'controller' => MainController::class, 'method' => 'typesAction' ], 
        'types' 
    );

    $altorouter->map( 
        'GET',   
        '/types/[i:typeId]', 
        [ 'controller' => MainController::class, 'method' => 'typesIdAction' ], 
        'typesById' 
    );
    

    // Altorouter me renvoi les infos dans le cas où la route a matchée avec l'URL tapée par le client
    $match = $altorouter->match();

    if($match !== false) { // si la route existe
        // $match contient un tableau ici
        //dump($match);
        $currentRoute = $match['target'];
        $nameController = $currentRoute['controller'];
        $nameMethod = $currentRoute['method'];
        $controller = new $nameController();

        // On appelle la méthode du controller 
        $params = $match['params']; // Récupérer tous les paramètres dynamique de l'URL
        $controller->$nameMethod($params);

    } else {
        // On est dans une erreur 404
        echo "erreur";
    }
