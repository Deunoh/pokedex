<?php

namespace App\Controllers;
use App\Controllers\CoreController;
use App\Models\Pokemon;
use App\Models\Type;
use App\Utils\Database;

class MainController extends CoreController{
    public function homeAction(){

        $pokemonModel = new Pokemon;
        $pokemons = $pokemonModel->findAll();

        $this->show('home', ['pokemons' => $pokemons]);

    }

    public function detailsAction($params){
        $pokemonId = $params['pokemonId'];

        $typeModel = new Type;
        $pokemonType = $typeModel->findType($pokemonId);

        $pokemonModel = new Pokemon;
        $pokemonDetail = $pokemonModel->find($pokemonId);

        $this->show('details', ['pokemonDetails' => $pokemonDetail, 'pokemonType' => $pokemonType ]);
    }

    public function typesAction(){

        $typeModel = new Type;
        $types = $typeModel->findAll();

        $this->show('types', ['types' => $types]);
    }

    public function typesIdAction($params){
        $typeId = $params['typeId'];
        $typeModel = new Type;
        $pokemonsByTypes = $typeModel->findByTypeId($typeId);

        $this->show('types_pokemon', ['pokemonsByTypes' => $pokemonsByTypes ]);
    }
}