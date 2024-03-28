<?php 

namespace App\Models;
use App\Utils\Database;

use PDO;

class Pokemon_Type {
    private $id;
    private $pokemon_number;
    private $type_id;

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
     * Get the value of pokemon_number
     */ 
    public function getPokemon_number()
    {
        return $this->pokemon_number;
    }

    /**
     * Set the value of pokemon_number
     *
     * @return  self
     */ 
    public function setPokemon_number($pokemon_number)
    {
        $this->pokemon_number = $pokemon_number;

        return $this;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }
}