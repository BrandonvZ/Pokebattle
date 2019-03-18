<?php

    class Pokemon_Resistance
    {
        private $type;
        private $value;

        public function __construct($type, $value)
        {
            $this->type = new Pokemon_Type($type);
            $this->value = $value;
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
