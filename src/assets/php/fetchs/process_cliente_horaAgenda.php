<?php
    include('../connection.php');

    $retorno = '';

    $email = $_POST['emailCliente'];
    $sql_selectAgendamento = "SELECT * FROM `horarios` WHERE Cliente_email = '".$email."' ORDER BY dia DESC LIMIT 1 ";

    $resultadoSelect = mysqli_query($con, $sql_selectAgendamento);

    mysqli_close($con);
    
    $linha = mysqli_fetch_array($resultadoSelect);
    if(isset($linha["dia"])) {
        $diaProcedimento = date("d/m/Y", strtotime($linha["dia"]));
    } else {
        $diaProcedimento =  date("d/m/Y", strtotime("01/01/1970"));
    }
    

    if($diaProcedimento >= date("d/m/Y")){
            
        $retorno .= '  
        <tr>  
            <td>' .$diaProcedimento. '</td>  
            <td>'.$linha["horario"].'</td>
        </tr>  
        ';
    }
    
    if($retorno == '' ){
        echo $retorno .= ' <tr>  
            <td> Indisponível</td>  
            <td> Indisponível </td>
        </tr>  ';
    } else {
        echo $retorno;
    }

?>