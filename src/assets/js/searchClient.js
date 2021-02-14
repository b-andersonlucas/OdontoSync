//EXIBIR PESQUISA
$(document).ready(function() {
    $('#btn_search').click(function() {
        var namePeople = $('#searchClient').val();
        $.ajax({
            url:"../assets/php/fetchs/process_search.php",
            method:"POST",
            data:{name_str:namePeople},
            dataType:"text",
            success:function(data) {
                $('#tableSearch').html(data);
            }
        });        
    });
});

//VISUALIZAR DADOS
$(document).ready(function() {
    $('#btn_view').click(function() {
        //Visualizar dados
        var email_str = $('#inputView').val();
        $.ajax({
            url:"../assets/php/fetchs/process_view_client.php",
            method:"POST",
            data:{emailClient:email_str},
            dataType:"text",
            success:function(dataClient) {
                $('#tableData').html(dataClient);
            }
        });

        //historico
        $.ajax({
            url:"../assets/php/fetchs/process_historic_fetch.php",
            method:"POST",
            data:{emailClient:email_str},
            dataType:"text",
            success:function(dataClientHistoric) {
                $('#tableHistoric').html(dataClientHistoric);
            }
        });

    });
});

//FORMULARIO DE RETORNO
$(document).ready(function() {
    $('#btn_load').click('change', function() {
        var name_people = $('#namePeople').text();
        //var tel_people = $('#telPeople').text();
        //se utilizar tel_people será necessário formatar

        $("#name_client").val(name_people);
        //$('#tel_client').val(tel_people);
    });
});



