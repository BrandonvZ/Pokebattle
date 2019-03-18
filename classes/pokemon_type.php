<?php

    class Pokemon_Type
    {
        // Store variable for class 'Pokemon_Type'.
        private $name;

        /**
         * This function is called whenever a new 'Pokemon_Type' class has been created.
        */
        public function __construct($name)
        {
            $this->name = $name;
        }

        /**
         * This function will return data
        */
        public function __get($variable)
        {
            return $this->$variable;
        }
    }

?>
