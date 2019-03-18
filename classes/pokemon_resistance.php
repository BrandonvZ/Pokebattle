<?php

    class Pokemon_Resistance
    {
        // Store all variables for class 'Pokemon_Resistance'.
        private $type;
        private $value;

        /**
         * This function is called whenever a new 'Pokemon_Resistance' class has been created.
        */
        public function __construct($type, $value)
        {
            $this->type = new Pokemon_Type($type);
            $this->value = $value;
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
