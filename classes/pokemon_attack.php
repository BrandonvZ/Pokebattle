<?php

    class Pokemon_Attack
    {
        private $name;
        private $type;
        private $damage;

        public function __construct($name, $type, $damage)
        {
            $this->name = $name;
            $this->type = new Pokemon_Type($type);
            $this->damage = $damage;
        }

        public function __get($variable)
        {
            if($variable == 'type'){
                return $this->type->name;
            }
            return $this->$variable;
        }
    }

?>
