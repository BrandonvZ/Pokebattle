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

        public function __get($variable)
        {
            return $this->$variable;
        }
    }

?>
