<?php

    class Pokemon_Attack
    {
        // Store all variables for class 'Pokemon_Attack'.
        private $name;
        private $type;
        private $damage;

        /**
         * This function is called whenever a new 'Pokemon_Attack' class has been created.
        */
        public function __construct($name, $type, $damage)
        {
            $this->name = $name;
            $this->type = new Pokemon_Type($type);
            $this->damage = $damage;
        }

        /**
         * This function will return data
        */
        public function __get($variable)
        {
            if($variable == 'type'){
                return $this->type->name;
            }
            return $this->$variable;
        }
    }

?>
