class Aluno {
    #nota
    constructor (nome, idade, nota) {
        // construtuctor é um método tradicional
        this.nome = nome;
        this.idade = idade;
        // para tranformar em secreta #
        this.#nota = nota;
    }
        estudar = () => console.log (`${this.nome} esta estudando.`);
        verNota = () => this.#nota
}

const Isa = new Aluno ("Isa", 17, 100)

console.log(Isa.nome)
console.log(Isa.verNota())
