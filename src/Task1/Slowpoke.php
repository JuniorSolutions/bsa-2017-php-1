<?php

namespace BinaryStudioAcademy\Task1;

class Slowpoke implements Pokemon
{
    public $name = 'Slowpoke';
    public function battleCry()
    {
    	return 'So slow!';
    }
    public function imageUrl(){
    	return 'https://img.pokemondb.net/artwork/slowpoke.jpg';
    }
}