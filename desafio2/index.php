<?php

class Escola{
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

    
public function falar(){
    echo " Olá,sou {$this->nome} ";
}
}

class Aluno1 extends Escola{
    public function falar()
    {
    echo " Olá eu sou a aluna {$this->nome} e estou estudando português. EU tirei {$this->verNota()} <br>";
    }

} 
class Aluno2 extends Escola{
    public function falar()
    {
    echo " Olá eu sou a aluna {$this->nome} e estou estudando geografia.. EU tirei {$this->verNota()} <br>";
    }

} 
class Professor1 extends Escola{
    public function falar()
    {
    echo " Olá eu sou a professora {$this->nome} e estou ensinado português <br>";
    }

} 
class Professor2 extends Escola{
    public function falar()
    {
    echo " Olá eu sou o professor {$this->nome} e estou ensinando geografia <br>";
    }

} 

class Funcionario1 extends Escola{
    public function falar()
    {
    echo " Olá eu sou a inspetora {$this->nome} e fiscalizando a saída dos alunos <br>";
    }

} 


class Funcionario2 extends Escola{
    public function falar()
    {
    echo " Olá eu sou a inspetora {$this->nome} e estou acompanhamdo o lanche dos alunos <br>";
    }

} 

class Diretora1 extends Escola{
    public function falar()
    {
    echo " Olá eu sou a diretora {$this->nome} <br>";
    }

} 




$isa = new Aluno1 ("Isa", 18, 80);
$fany = new Aluno2 ("Fany", 17, 100);
$julia = new Professor1 ("Julia", 25, 0);
$aluisio = new Professor2 ("Aluisio", 35, 0);
$erivan = new Funcionario1 ("Erivan", 50, 0);
$antonia = new Funcionario2 ("Antonia", 54, 0);
$camila = new Diretora1 ("Camila", 55, 0);




?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Informaçoes da escola</title>
</head>
<body>
    <h1>INFORMAÇÕES DA ESCOLA</h1>
    <ul>
             <li><?php $isa->falar(); ?></li>
             <li><?php $fany->falar(); ?></li>
             <li><?php $julia->falar(); ?></li>
             <li><?php $aluisio->falar(); ?></li>
             <li><?php $erivan->falar(); ?></li>
             <li><?php $antonia->falar(); ?></li>
             <li><?php $camila->falar(); ?></li>
    </ul>

</body>
</html>


