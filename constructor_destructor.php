<?php

class Pessoa{
    function __construct($nome){
        echo ' O Objeto foi iniciado';
        echo '<br>';
        $this->nome = $nome;
    
    }
 
}

$p = new Pessoa("Thalia ");
?>