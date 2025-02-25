// criar classe pessoa 
// parametros (nome, idade)

class Pessoa {
    constructor (nome, idade ) {
        // construtuctor é um método tradicional
        this.nome = nome;
        this.idade = idade;
    }
    apresentar = () => console.log (`Olá sou a ${this.nome}  e tenho ${this.idade} anos   `);
}

class Aluno extends Pessoa{
    estudar = () => console.log (`${this.nome} esta estudando`) 
    estudar2 = () => console.log (`${this.nome} esta dormindo`) 
}

class Professor extends Pessoa{
    ensinar = () => console.log (`${this.nome} esta ensinando`)
    ensinar2 = () => console.log (`${this.nome} esta conversando`) 
} 



const Isa = new Aluno ("Isa", 17)
const Fany = new Aluno ("Fany", 17)
const Nadja = new Professor ("Nadja", 28)
const Raul = new Professor ("Raul", 28)

Isa.apresentar()
Fany.apresentar()
Nadja.apresentar()
Raul.apresentar()


Isa.estudar()
Fany.estudar2()
Nadja.ensinar()
Raul.ensinar2()

