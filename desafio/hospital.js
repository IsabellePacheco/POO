class Hospital {
    #CPF
    constructor (nome, CPF) {
        // construtuctor é um método tradicional
        this.nome = nome;
        // para tranformar em secreta #
        this.#CPF = CPF;
    }
        apresentar = () => console.log (`Ola, sou ${this.nome}.`);
        verCPF = () => this.#CPF
        acao = () => (` O CPF do ${this.nome} é ${this.#CPF} `);
}

class Funcionario1 extends Hospital{
    apresentar = () => (`Olá, sou ${this.nome}, estou tirando sangue do paciente .`)
}
class Funcionario2 extends Hospital{
    apresentar = () => (`Olá, sou ${this.nome}, estou fazendo raio--x no paciente .`)
}
class Funcionario3 extends Hospital{
    apresentar = () => (`Olá, sou ${this.nome}, estou fazendo uma cirugia no coração de uma paciente .`)
}
class Funcionario4 extends Hospital{
    apresentar = () => (`Olá, sou ${this.nome}, estou fazendo consulata de rotina em um paciente .`)
}
class Funcionario5 extends Hospital{
    apresentar = () => (`Olá, sou ${this.nome}, estou colocando gesso no pé de um paciente .`)
}
class Funcionario6 extends Hospital{
    apresentar = () => (`Olá, sou ${this.nome}, estou prescrevendo medicamentos para um paciente  .`)
}
class Funcionario7 extends Hospital{
    apresentar = () => (`Olá, sou ${this.nome}, estou fazendo uma cirurgia plastica em um paciente .`)
}


const Isa = new Funcionario1 ("Isa", 123456789.12)
const Eduardo = new Funcionario2 ("Eduardo", 123456789.12)
const Gael = new Funcionario3 ("Gael", 123456789.12)
const Julia = new Funcionario4 ("Julia", 123456789.12)
const Carlos = new Funcionario5 ("Carlos", 123456789.12)
const Roberta = new Funcionario6 ("Roberta", 123456789.12)
const Sonia = new Funcionario7 ("Sonia", 123456789.12)


console.log(Isa.apresentar())
console.log(Isa.acao())

console.log(Eduardo.apresentar())
console.log(Eduardo.acao())

console.log(Gael.apresentar())
console.log(Gael.acao())

console.log(Julia.apresentar())
console.log(Julia.acao())

console.log(Carlos.apresentar())
console.log(Carlos.acao())

console.log(Roberta.apresentar())
console.log(Roberta.acao())

console.log(Sonia.apresentar())
console.log(Sonia.acao())


const resultados = document.getElementById('resultados');
        
        const funcionarios = [Isa, Eduardo, Gael, Julia, Carlos, Roberta, Sonia];
        
        funcionarios.forEach(funcionario => {
            const row = document.createElement('tr');
            
            // Adiciona as colunas para o , ação e CPF
            
            const acaoCell = document.createElement('td');
            acaoCell.textContent = funcionario.apresentar();
            row.appendChild(acaoCell);
            
            const cpfCell = document.createElement('td');
            cpfCell.textContent = funcionario.acao();
            row.appendChild(cpfCell);

            // Adiciona a linha à tabela
            resultados.appendChild(row);
        });