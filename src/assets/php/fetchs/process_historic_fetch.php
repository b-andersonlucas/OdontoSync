<?php
    include '../connection.php';
    $outputHistoric = '';
    
    $email = $_POST['emailClient'];
    $sql_select_historic = "SELECT * FROM historico where Cliente_email  = '".$email."'";

    $result_selectHistoric = mysqli_query($con, $sql_select_historic);


    while($row = mysqli_fetch_array($result_selectHistoric))  
    {
            $dateProce = date("d/m/Y", strtotime($row["dia"]));
            $outputHistoric .= '  
            <tr>  
                <td>' .$dateProce. '</td>  
                <td>'.$row["hora"].'</td>
                <td>'.$row["procedimento"].'</td>
                <td>'.$row["nome_dentista"].'</td>

            </tr>  
            ';
    }  

    echo $outputHistoric;
?>