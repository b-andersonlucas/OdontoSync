function send_msg() {
    var id_name = document.getElementById('name_author').value
    var id_subject = document.getElementById('subject').value
    var id_msg = document.getElementById('message').value
    var id_link = document.getElementById('btn_link').setAttribute("href",`https://wa.me/+55849######?text=Nome: ${id_name}%0aAssunto: ${id_subject}%0aMenssagem: ${id_msg}`)
}