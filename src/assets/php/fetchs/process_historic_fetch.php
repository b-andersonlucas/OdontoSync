<?php
    include '../connection.php';
    $outputHistoric = '';
    
    $email = $_POST['emailClient'];
    $sql_select_historic = "SELECT * FROM historico INNER JOIN pessoa ON historico.dentista_email = pessoa.email";

    $result_selectHistoric = mysqli_query($con, $sql_select_historic);


    while($row = mysqli_fetch_array($result_selectHistoric))  
    {
        if($row["Cliente_email"] == $email) {
            $dateProce = date("d/m/Y", strtotime($row["dia"]));
            $outputHistoric .= '  
            <tr>  
                <td>' .$dateProce. '</td>  
                <td>'.$row["hora"].'</td>
                <td>'.$row["procedimento"].'</td>
                <td>'.$row["nome"].'</td>

            </tr>  
            ';
        } else if($row == null || $row == ''){
            $outputHistoric .='Historico indisponivel';
        } else {
            $outputHistoric .='Historico indisponivel';
        }
    }  

    echo $outputHistoric;
?>