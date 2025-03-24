<?php

class Aluno{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
    $this->nome = $nome;
    $this->idade = $idade;
    }
    
    public function estudar (){
        echo "{$this->nome} esta estudando";
    }
}

// crinado objetos

$isa = new Aluno ("Isa", 18);
$fany = new Aluno ("Fany", 17);

echo $isa->nome;
$isa->estudar();
?>