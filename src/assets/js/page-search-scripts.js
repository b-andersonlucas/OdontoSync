//EXIBIR PESQUISA
$(document).ready(function() {
    $('#btn_pesquisar').click(function() {
        var nomePessoa = $('#pesquisarUsuario').val();
        $.ajax({
            url:"../assets/php/fetchs/process_pesquisarUsuario.php",
            method:"POST",
            data:{nome_str:nomePessoa},
            dataType:"text",
            success:function(dados) {
                $('#tablePesquisa').html(dados);
            }
        });        
    });
});

//VISUALIZAR DADOS
$(document).ready(function() {
    $('#btn_visualizar').click(function() {
        //Visualizar dados
        var email_str = $('#inputEmail').val();
        $.ajax({
            url:"../assets/php/fetchs/process_visualizarDados.php",
            method:"POST",
            data:{emailCliente:email_str},
            dataType:"text",
            success:function(dadosCliente) {
                $('#tableDados').html(dadosCliente);
            }
        });

        //historico
        $.ajax({
            url:"../assets/php/fetchs/process_historico.php",
            method:"POST",
            data:{emailCliente:email_str},
            dataType:"text",
            success:function(dadosClienteHistorico) {
                $('#tableHistorico').html(dadosClienteHistorico);
            }
        });

    });
});

//FORMULARIO DE RETORNO
$(document).ready(function() {
    $('#btn_carregar').click('change', function() {
        var nome_pessoa = $('#nomePessoa').text();
        //var tel_people = $('#telPeople').text();
        //se utilizar tel_people será necessário formatar

        $("#nomeCliente").val(nome_pessoa);
        //$('#tel_client').val(tel_people);
    });
});



