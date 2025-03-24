<?php

class Aluno{
    public $nome;
    public $idade;
    private $nota;    


public function __construct($nome, $idade, $nota)
    {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->nota = $nota;
    }
    
    public function verNota(){
        return $this->nota;
    }

}

$gabi = new Aluno ("Gabi", 12, 9);

echo $gabi->nome;
echo $gabi->verNota();
?>