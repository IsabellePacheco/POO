class Pessoa {
    constructor (nome) {
        this.nome = nome;
    }

    apresentar= () => console.log (`Olá eu sou ${this.nome} .`)
}

class Aluno extends Pessoa{
   apresentar = () => console.log (`Olá eu sou ${this.nome} e sou aluno. `) 
}

class Professor extends Pessoa{
   apresentar = () => console.log (`Olá eu sou ${this.nome} e sou o professor`)
    
} 

const Fany = new Pessoa("Fany")
const Isa = new Aluno ("Isa" )
const Raul = new Professor ("Raul" )

Fany.apresentar();
Isa.apresentar();
Raul.apresentar();
