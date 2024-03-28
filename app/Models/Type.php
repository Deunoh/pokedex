<?php 

namespace App\Models;
use App\Utils\Database;
use PDO;
use App\Models\Pokemon;
use App\Models\Pokemon_Type;


class Type {
    private $id;
    private $name;
    private $color;

    public function findAll(){
        $pdo = Database::getPDO();
        $sql = '
        SELECT name, color, id FROM `type`
        ';
        $pdoStatement = $pdo->query($sql);
        $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $types;
    }

    public function findByTypeId($typeId){
        $pdo = Database::getPDO();
        $sql = "SELECT pokemon.name, pokemon.number, pokemon.id
                FROM pokemon
                INNER JOIN pokemon_type ON pokemon.number = pokemon_type.pokemon_number
                INNER JOIN type ON pokemon_type.type_id = type.id
                WHERE type.id = $typeId;
        
    ";
    $pdoStatement = $pdo->query($sql);
    $pokemons_type = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Pokemon');
    return $pokemons_type;
    }

    public function findType($pokemonId){
        $pdo = Database::getPDO();
        $sql = "SELECT type.name, type.color
                FROM pokemon
                INNER JOIN pokemon_type ON pokemon.number = pokemon_type.pokemon_number
                INNER JOIN type ON pokemon_type.type_id = type.id
                WHERE pokemon.id = $pokemonId;
    ";
    $pdoStatement = $pdo->query($sql);
    $pokemon_detail = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    return $pokemon_detail;
}
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}