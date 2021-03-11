function enviar_visualizar(event) {
    var email = event.target.value
    const input_email = document.getElementById('inputEmail')
    
    if(email  === undefined) {
        input_email.value = ""
    } else {
        input_email.value = email
        const btnVisualizar = document.getElementById('btn_visualizar').click()

        function preencherInputs() {
             //Campos da tabela Dados Gerais
            var nome = document.getElementById('nomePessoa')
            var telefone = document.getElementById('telPessoa')

            //Campos do formulario Informar retorno
            const nome_Cliente = document.getElementById('nomeCliente')
            const telefone_Cliente = document.getElementById('telefoneCliente')

            nome_Cliente.value = nome.textContent
            
            //Formatando telefone
            var telefoneFormatado = telefone.textContent
            telefoneFormatado = telefoneFormatado.replace('(', "")
            telefoneFormatado = telefoneFormatado.replace(')', "")
            telefoneFormatado = telefoneFormatado.replace('-', "")
            telefoneFormatado = telefoneFormatado.replace(' ', "")

            telefone_Cliente.value = telefoneFormatado

            //console.log(nome.textContent)
            //console.log(telefoneFormatado)
        }
        
        setTimeout(preencherInputs, 1000)
    }
}