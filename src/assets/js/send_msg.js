const tel_admin = +5584
const clinc = "OdontoSync"
function send_msg_contact() {
    var id_name = document.getElementById('name_author').value
    var id_subject = document.getElementById('subject').value
    var id_msg = document.getElementById('message').value
    var id_link = document.getElementById('btn_link').setAttribute("href",`https://wa.me/${tel_admin}?text=Nome: ${id_name}%0aAssunto: ${id_subject}%0aMenssagem: ${id_msg}`)
}


//FUNCAO REQUISITADA NA PAGINA src/pages/page-search.html
function send_msg_return() {
    var id_nameClient = document.getElementById('name_client').value
    var id_telClient = document.getElementById('tel_client').value
    var id_dateReturn = document.getElementById('date_return').value
    var id_msgReturn = document.getElementById('msg_return').value
    
    //Formatando data
    let dateObj = new Date(id_dateReturn)
    let dd = dateObj.getDate()+1
    let mm = dateObj.getMonth()+1
    let yyyy = dateObj.getFullYear()

    var formatDate = dd + "/" + mm + "/" + yyyy

    var id_linkReturn = document.getElementById('link_send_msg')
    .setAttribute("href", `https://wa.me/+55${id_telClient}?text=Olá ${id_nameClient}!%0aSeu retorno será dia ${formatDate}%0a${id_msgReturn}%0aAtenciosamente, ${clinc}!`)
    
}