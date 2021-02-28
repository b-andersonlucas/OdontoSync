$(document).ready(function() {
    var email_str = $('#email').text();
        //Agendamento
        $.ajax({
            url:"../assets/php/fetchs/process_cliente_horaAgenda.php",
            method:"POST",
            data:{emailCliente:email_str},
            dataType:"text",
            success:function(agendamento) {
                $('#horarioAgendado').html(agendamento);
            }
        });

        $.ajax({
            url:"../assets/php/fetchs/process_historico.php",
            method:"POST",
            data:{emailCliente:email_str},
            dataType:"text",
            success:function(historico) {
                $('#tabelaHistorico').html(historico); 
            }
        });
});

$(document).ready(function(){
    $('#inputDia').change(function(){
        var diaSelecionado = $(this).val();
        $.ajax({
            url:"../assets/php/fetchs/get_dentista.php",
            method:"POST",
            data:{diaInput:diaSelecionado},
            dataType:"text",
            success:function(hora) {
                $('#inputDentista').html(hora);
            }
        });
    });

    $('#inputDentista').change(function() {
        var dentistaSelecionado = $(this).val();

        $.ajax({
            url:"../assets/php/fetchs/get_horario.php",
            method:"POST",
            data:{dentista:dentistaSelecionado},
            dataType:"text",
            success:function(hora) {
                $('#inputHora').html(hora);
            }
        });
    })
});