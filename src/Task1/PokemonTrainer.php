<?php

namespace BinaryStudioAcademy\Task1;

class PokemonTrainer
{
          
    public function pick(Pokemon $pokemon)
    {        
        return $pokemon->name.': '.$pokemon->battleCry();
    }    
}
