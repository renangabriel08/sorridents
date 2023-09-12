const inputCep = document.querySelector("#cep");
const inputLogradouro = document.querySelector("#logradouro");
const inputBairro = document.querySelector("#bairro");
const inputCidade = document.querySelector("#cidade");
const inputEstado = document.querySelector("#estados");

function chamarCep(valorCep) {
    if(valorCep.length == 8) {
        const data = fetch(`https://viacep.com.br/ws/${valorCep}/json/`)
        .then(data => data.json())
        return data
    }
}

async function chamarDados() {
    const dados = await chamarCep(inputCep.value)
    if(inputCep.value.length == 8) {
        if(dados.erro) {
            inputLogradouro.value = '';
            inputBairro.value = '';
            inputCidade.value = '';
            inputEstado.value = '';
        } else {
            inputLogradouro.value = dados.logradouro;
            inputBairro.value = dados.bairro;
            inputCidade.value = dados.localidade;
            inputEstado.value = dados.uf;
        }
    }
}
