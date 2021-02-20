$(document).ready(function() {
    $('#btn_atend').click(function() {
        var diaAtendimento = $('#dia_atend').val();
        $.ajax({
            url:"../assets/php/fetchs/get_listaAtendimento.php",
            method:"POST",
            data:{dia_str:diaAtendimento},
            dataType:"text",
            success:function(data) {
                $('#listaClientes').html(data);
            }
        });        
    });
});