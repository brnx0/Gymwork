function openPopUp(id, nome=null){
    document.getElementById('idEdit').value=id
    if(nome !=null){
        document.getElementById('idEditDel').value=id
        document.getElementById('nomeDel').innerHTML = nome;
    }
}