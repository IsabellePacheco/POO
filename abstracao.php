<?php

abstract class Pessoa{
    public $nome;
    
    public function __construct($nome)
    {
        $this->nome=$nome;
    }
}


class Aluno extends Pessoa {
}

$gael = new Aluno ("Gael");
echo $gael->nome . "É ele";

?>