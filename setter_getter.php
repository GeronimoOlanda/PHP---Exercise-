<?php
    //modelo
    class funcionario{
    //dentro da abstracao vai os atribulos e metodos

    //atributos
    public $nome = null;
    public $telefone = null;
    public $numeroFilhos = null;

    //metodos
    function setNome(){
         $this->nome = $nome;
    }

    function settelefone(){
        $this->telefone = $telefone;
    }

    function setNumerosFilhos(){
        $this->numeroFilhos = $numeroFilhos;
    }


    function resumircadfunc(){
        return "$this->nome possui $this->numeroFilhos Filhos(a)";
    }

    function modificarNumFilhos(){
     $this->numeroFilhos = $numeroFilhos;
    }

}

//criando a abstracao
$a = new funcionario();
echo $a->resumircadfunc();

echo "<br>";

$a->modificarNumFilhos(3);
echo $a->resumircadfunc();

?>