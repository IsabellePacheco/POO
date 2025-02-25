// criando a classe aluno

class Aluno {
    constructor (nome,idade) {
        // construtuctor é um método tradicional
        this.nome = nome;
        this.idade = idade;
    }
        estudar = () => console.log (`${this.nome} esta estudando.`);
        comer = ()  => console.log (`${this.nome} esta comendo uvas.`);
        felicidade = () => console.log (`${this.nome} esta feliz.`);
}

const Isa = new Aluno ("Isa", 17)
const Stefany = new Aluno ("Stefany", 17)
const Gabi = new Aluno ("Gabi", 12 )

console.log (Gabi.nome, Gabi.idade); 
Gabi.comer();
Gabi.felicidade();

