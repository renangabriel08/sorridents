const pacienteInput = document.querySelector("#paciente");
const pacienteIdInput = document.querySelector("#id");
const convenioInput = document.querySelector("#convenio");


// Evento to get address
pacienteInput.addEventListener("keyup", (e) => {

    const inputValue = e.target.value;
    //   Check if we have a CEP
    if (inputValue.length === 2 || inputValue.length > 3) {
        getDados(inputValue);
    }
    if (inputValue.length === 0) {
        document.getElementById('resultado-pesquisa').innerHTML = "";
    }
});

const getDados = async (nome) => {


    const response = await fetch('http://localhost/sorridents/busca-usuarios/'+nome);

    const paciente = await response.json();

    var conteudoHTML = "<ul class='list-group position-fixed'>";

    if(paciente['status']){
        for(i = 0; i < paciente['dados'].length; i++){

            conteudoHTML += "<li class='list-group-item list-group-itemaction' style='cursor: pointer;' onclick='setPaciente("+paciente['dados'][i].id+","+JSON.stringify(paciente['dados'][i].nome)+","+paciente['dados'][i].convenio+")' >"+paciente['dados'][i].nome+"</li>"
        }
    }
    else{
        conteudoHTML += "<li class='list-group-item disable'>"+paciente['msg']+"</li>";
    }

    conteudoHTML += "</ul>";

    document.getElementById('resultado-pesquisa').innerHTML = conteudoHTML;

};

function setPaciente(id,nome, convenio){
    pacienteInput.value = nome;
    pacienteIdInput.value = id;
    convenioInput.value = convenio;

    document.getElementById('resultado-pesquisa').innerHTML = "";
}