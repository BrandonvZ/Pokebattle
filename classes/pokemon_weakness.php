<?php

    class Pokemon_Weakness
    {
        private $type;
        private $multiplier;

        public function __construct($type, $multiplier)
        {
            $this->type = new Pokemon_Type($type);
            $this->multiplier = $multiplier;
        }

        public function __get($variable)
        {
            if($variable == 'type')
            {
                return $this->type->name;
            }
            return $this->$variable;
        }
    }

?>
