<?php
     include '../connection.php';
     $outputList = '';

    $email = $_POST['emailClient'];
    $sql_select_schedule = "SELECT * FROM `horarios` WHERE Cliente_email = '".$email."' ORDER BY dia DESC LIMIT 1 ";

    $result_selectSchedule = mysqli_query($con, $sql_select_schedule);

    while($row = mysqli_fetch_array($result_selectSchedule))  
    {
            $dateProce = date("d/m/Y", strtotime($row["dia"]));
            if($dateProce > date("d/m/Y") || $dateProce == date("d/m/Y")) {
                $outputList .= '  
                <tr>  
                    <td>' .$dateProce. '</td>  
                    <td>'.$row["horario"].'</td>
                </tr>  
                ';
            }
    }
    
    if($outputList == '' ){
        echo $outputList .= ' <tr>  
            <td> Indisponível</td>  
            <td> Indisponível </td>
        </tr>  ';
    } else {
        echo $outputList;
    }

?>