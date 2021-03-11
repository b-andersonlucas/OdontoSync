const tel_admin = +5584  //Inserir numero do admin
const clinica = "OdontoSync"

function enviar_msg_contato() {
    var id_nome = document.getElementById('nome_autor').value
    var id_assunto = document.getElementById('assunto').value
    var id_msg = document.getElementById('mensagem').value
    var id_link = document.getElementById('btn_link').setAttribute("href",`https://wa.me/${tel_admin}?text=Nome: ${id_nome}%0aAssunto: ${id_assunto}%0aMenssagem: ${id_msg}`)
}


//FUNCAO REQUISITADA NA PAGINA src/pages/page-search.html
function enviar_msg_retorno() {
    var id_nomeCliente = document.getElementById('nomeCliente').value
    var id_telCliente = document.getElementById('telefoneCliente').value
    var id_dataRetorno = document.getElementById('diaRetorno').value
    var id_msgRetorno = document.getElementById('msgRetorno').value
    
    //Formatando data
    let diaObj = new Date(id_dataRetorno)
    let dd = diaObj.getDate()+1
    let mm = diaObj.getMonth()+1
    let yyyy = diaObj.getFullYear()

    var diaFormatada = dd + "/" + mm + "/" + yyyy

    id_telCliente = id_telCliente.replace('', "")

    var id_linkRetorno = document.getElementById('link_enviar_msg')
    .setAttribute("href", `https://wa.me/+55${id_telCliente}?text=Olá ${id_nomeCliente}!%0aSeu retorno será dia ${diaFormatada}%0a${id_msgRetorno}%0aAtenciosamente, ${clinica}!`)
    
}