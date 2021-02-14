$(document).ready(function() {
    $('#btn_sch').click(function() {
        var dateSch = $('#date_sch').val();
        $.ajax({
            url:"../assets/php/fetchs/get_listSchedule.php",
            method:"POST",
            data:{date_str:dateSch},
            dataType:"text",
            success:function(data) {
                $('#listClients').html(data);
            }
        });        
    });
});