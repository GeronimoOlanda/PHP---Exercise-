<?php
    namespace A;
    class Cliente{
        public $nome ='Geronimo';
        public function __get($attr){   
            return $this->$attr;
        }
    }
    namespace B;
    class Cliente{
        public $nome =' Geronimo';
        public function __get($attr){   
            return $this->$attr;
        }
    }
$c = new Cliente();
echo $c->__get('nome');
?>