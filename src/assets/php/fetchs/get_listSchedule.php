<?php
    include '../connection.php';
    $outputList = '';
    
    $email = $_POST['date_str'];
    $sql_select_schedule = "SELECT pessoa.nome, dia, priv_pessoa FROM `horarios` INNER JOIN pessoa ON dia = '".$email."' AND priv_pessoa = 'c'";

    $result_selectSchedule = mysqli_query($con, $sql_select_schedule);


    while($row = mysqli_fetch_array($result_selectSchedule))  
    {
        $outputList .= ' <li class="list-group-item"><span>'.$row["nome"].'</span></li>';
    }
    
    if($outputList == '') {
        $outputList = '<li class="list-group-item"><span>Agendamentos Indisponíves!</span></li>';
    }

    echo $outputList;
?>