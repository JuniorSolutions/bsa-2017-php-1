<?php

namespace BinaryStudioAcademy\Task1;

class Pikachu implements Pokemon
{
    public $name = 'Pikachu';
    public function battleCry()
    {
    	return 'Pika-Pika!';
    }
    public function imageUrl(){
    	return 'https://img.pokemondb.net/artwork/pikachu.jpg';
    }
}