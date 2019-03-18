<?php

    class Pokemon_Type
    {
        private $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function __get($variable)
        {
            return $this->$variable;
        }
    }

?>
