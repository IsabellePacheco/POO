class Pessoa {
    constructor (nome) {
        if (this.constructor === Pessoa){
            throw new Error ("nao pode ser criado outra pessoa")
        }
        this.nome = nome;
    }
}
class Aluno extends Pessoa{
    
}

const Isa = new Aluno("Isa")
const Fany = new Pessoa("Fany")

console.log (Isa.nome)