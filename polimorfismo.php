<?php
 class Pessoa {
    public $nome;

    public function __construct ($nome)
    {
        $this->nome = $nome;
    }

    public function apresentar (){
        echo "Olá, sou ($this->nome}";
    }
 }

//  classe Aluno herda de Pessoa e sobrescreve o metodo apresentar

class Aluno extends Pessoa {
    public function apresentar(){
        echo "Oi! Meu nome é {$this->nome} e sou aluno <br>";
}
}


class Professor extends Pessoa {
    public function apresentar(){
        echo "Oi! Eu sou o Professor {$this->nome}";
}
}

$isa = new Aluno (" Isa", 18);
$raul = new Professor ("Raul", 38);
echo $isa->apresentar();
echo $raul->apresentar();

?>