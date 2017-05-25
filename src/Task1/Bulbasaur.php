<?php

namespace BinaryStudioAcademy\Task1;

class Bulbasaur implements Pokemon
{
    public $name = 'Bulbasaur';
    public function battleCry()
    {
    	return 'Bool bool!';
    }
    public function imageUrl(){
    	return 'https://img.pokemondb.net/artwork/bulbasaur.jpg';
    }
}