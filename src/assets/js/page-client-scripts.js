$(document).ready(function() {
    var email_str = $('#email').text();
        //historico
        $.ajax({
            url:"../assets/php/fetchs/process_client_schedule.php",
            method:"POST",
            data:{emailClient:email_str},
            dataType:"text",
            success:function(agendamento) {
                $('#horarioAgendado').html(agendamento);
            }
        })

        $.ajax({
            url:"../assets/php/fetchs/process_historic_fetch.php",
            method:"POST",
            data:{emailClient:email_str},
            dataType:"text",
            success:function(historico) {
                $('#tabelaHistorico').html(historico);
            }
        });
});