<?php

namespace BinaryStudioAcademy\Task1;

class Psyduck implements Pokemon
{
    public $name = 'Psyduck';
    public function battleCry()
    {
    	return 'PSY!PSY!PSY!';
    }
    public function imageUrl(){
    	return 'https://img.pokemondb.net/artwork/psyduck.jpg';
    }
}