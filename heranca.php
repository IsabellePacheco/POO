<?php

class Pessoas{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar (){
        echo "Olá! Sou {$this->nome}, tenho {$this->idade} anos.<br>";
    }
}

// A classe ALuno vai herdar de Pessoas

class Aluno extends Pessoas{
    public function estudar (){
        echo "{$this->nome} está estudando.<br>";
    }
}


class Professor extends Pessoas{
    public function ensinar (){
        echo "{$this->nome} está ensinando.";
    }
}

$isa = new Aluno (" Isa", 18);
$raul = new Professor ("Raul", 38);
echo $isa->apresentar();
echo $isa->estudar();
echo $raul->apresentar();
echo $raul->ensinar();

?>