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
    echo " Olá eu sou a o professor {$this->nome} e estou ensinando geografia <br>";
    }

} 


$isa = new Aluno1 ("Isa", 18, 80);
$fany = new Aluno2 ("Fany", 17, 100);
$julia = new Professor1 ("Julia", 25, 0);
$Aluisio = new Professor2 ("Aluisio", 35, 0);



echo $isa->falar();
echo $fany->falar();
echo $julia->falar();
echo $Aluisio->falar();
?>


