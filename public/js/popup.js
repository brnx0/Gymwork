function openPopUp(id, nome=null){
    document.getElementById('idEdit').value=id
    if(nome !=null){
        document.getElementById('idEditDel').value=id
        document.getElementById('nomeDel').innerHTML = nome;
    }
}

async function buscaCep(){
    const cep = document.getElementsByName('cep')[0].value
    const jsonCep = await fetch(`http://viacep.com.br/ws/${cep}/json`).then( response=> response.json())
    document.getElementsByName('logradouro')[0].value = jsonCep['logradouro']
    document.getElementsByName('bairro')[0].value = jsonCep["bairro"]
    console.log(jsonCep)
}