<?php
    include('../connection.php');
    $saida_lista = '';
    
    $dia_PK = $_POST['dia_str'];
    $sql_select_horarios = "SELECT pessoa.nome, dia, priv_pessoa FROM `horarios` INNER JOIN pessoa ON dia = '".$dia_PK."' AND priv_pessoa = 'c'";

    $resultado_sql = mysqli_query($con, $sql_select_horarios);

    mysqli_close($con);


    while($linha = mysqli_fetch_array($resultado_sql))  
    {
        $saida_lista .= ' <li class="list-group-item"><span>'.$linha["nome"].'</span></li>';
    }
    
    if($saida_lista == '') {
        $saida_lista = '<li class="list-group-item"><span>Agendamentos Indisponíves!</span></li>';
    }

    echo $saida_lista;
?>