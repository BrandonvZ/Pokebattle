<?php

    class Pokemon_Weakness
    {
        // Store all variables for class 'Pokemon_Weakness'.
        private $type;
        private $multiplier;

        /**
         * This function is called whenever a new 'Pokemon_Weakness' class has been created.
        */
        public function __construct($type, $multiplier)
        {
            $this->type = new Pokemon_Type($type);
            $this->multiplier = $multiplier;
        }

        /**
         * This function will return data
        */
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
