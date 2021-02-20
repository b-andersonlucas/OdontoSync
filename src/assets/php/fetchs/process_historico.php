<?php
    include('../connection.php');
    $saida_historico = '';
    
    $email = $_POST['emailCliente'];
    $sql_select_historico = "SELECT * FROM historico where Cliente_email  = '".$email."'";

    $resultado_selectHistorico = mysqli_query($con, $sql_select_historico);


    while($linha = mysqli_fetch_array($resultado_selectHistorico))  
    {
            $diaProcedimento = date("d/m/Y", strtotime($linha["dia"]));
            $saida_historico .= '  
            <tr>  
                <td>' .$diaProcedimento. '</td>  
                <td>'.$linha["hora"].'</td>
                <td>'.$linha["procedimento"].'</td>
                <td>'.$linha["nome_dentista"].'</td>

            </tr>  
            ';
    }  

    if($saida_historico == '' ) {
        echo $saida_historico .= 'Histórico indisponível!';
    } else {
        echo $saida_historico;
    }
?>