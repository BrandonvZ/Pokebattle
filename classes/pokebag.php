<?php

    class Pokebag
    {
        // Store variables for class 'Pokebag'.
        private $pokemonList = array();
        private $maxPokemon = 10;

        /**
         * This function will create a single pokemon (max 10).
        */
        public function addPokemon($pokemon)
        {
            if(count($this->pokemonList) < $this->maxPokemon)
            {
                $this->pokemonList[] = $pokemon;
            }
        }

        /**
         * This function will remove a single pokemon.
        */
        public function removePokemon($pokemon)
        {
            $result = array_search($pokemon, $this->pokemonList);
            unset($this->pokemonList[$result]);
        }

        /**
         * This function will remove all pokemon from the bag.
        */
        public function removeAllPokemon()
        {
            $this->pokemonList = array();
        }

        /**
         * This function will show the current pokemon count in the bag.
        */
        public function getPokemonCount()
        {
            return count($this->pokemonList);
        }

        /**
         * This function will show the list.
        */
        public function showList()
        {
            $result = "";
            foreach ($this->pokemonList as $pokemon)
            {
                $result .= $pokemon->name . "<br/>";
            }
            return $result;
        }
    }

?>
