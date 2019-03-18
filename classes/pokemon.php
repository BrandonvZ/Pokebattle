<?php

    class Pokemon
    {
        private $name;
        private $type;
        private $hitPoints;
        private $health;
        private $attacks;
        private $weakness;
        private $resistance;

        public function __construct($name, $type, $hitPoints, $attacks, $weakness, $resistance)
        {
            $this->name = $name;
            $this->type = new Pokemon_Type($type);
            $this->hitPoints = $hitPoints;
            $this->attacks = $attacks;
            $this->weakness = $weakness;
            $this->resistance = $resistance;
        }

        public function attackPokemon($targetedPokemon, $attackName)
        {
            $attack;

            for($i = 0; $i < count($this->attacks); $i++){

                if($attackName == $this->attacks[$i]->name){
                    $attack = $this->attacks[$i];
                }

            }
            return $this->name . " valt " . $targetedPokemon->name . " aan met " . $attackName . " en deed " . $targetedPokemon->damagePokemon($this, $attack);
        }

        public function damagePokemon($targetedPokemon, $attack)
        {
            $output;
            $damage;

            if($this->weakness->type == $attack->type)
            {
                $output = ' schade (Het was super effectief!)';
                $damage = $attack->damage;
                $damage *= $this->weakness->multiplier;
            }
            else if($this->resistance->type == $attack->type)
            {

                $output = ' schade (Het was niet effectief!)';
                $damage = $attack->damage;
                $damage -= $this->resistance->value;

                if($damage < 0)
                {
                    $damage = 0;

                }
            }
            else {
                $output = ' schade';
                $damage = $attack->damage;
            }

            $this->hitPoints -= $damage;

            if($this->hitPoints < 0)
            {
                $this->hitPoints = 0;
            }
            else
            {
                $this->hitPoints;
            }

            return $damage . $output;

        }

        public function __get($variable)
        {
            return $this->$variable;
        }
    }

?>
