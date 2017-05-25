<?php

namespace BinaryStudioAcademy\Task3;

class PokemonPresenter
{
    private $pokemons;

    public function __construct(array $pokemons)
    {
        $this->pokemons = $pokemons;
    }

    /**
     * Returns html-list (ul-li) of images (img)
     *
     * @return string
     */
    public function present()
    {
       $str = '<ul>';
       foreach ($pokemons as $pokemon)
       {
            $uri = $pokemon->imageUrl();

            $this->$str .= '<li><img src="'.$uri.'"></li>';
                        
        
        }
        $str .='</ul>';
        return $str;

    }
}
