<?php
    include('connection.php');

    $clienteEmail = $_POST["email"];
    $dia = $_POST["dia"];
    $dentistaEmail = $_POST["dentista"];
    $horario = $_POST["hora"];
    
    $sql_select = "SELECT * FROM horarios WHERE dia = '$dia' AND horario = '$horario'";
    $resultado = mysqli_query($con, $sql_select);
    $arr = mysqli_fetch_array($resultado);
    $resArr = isset($arr["horario"]);

    if($resArr == $horario) {
        echo "<script language='javascript' type='text/javascript'>
                alert('Esse horario já foi preenchido');window.location.
                href='http://localhost/odontosync/src/pages/page-client.php'
            </script>";
    } else {
        $slq_insert = "INSERT INTO horarios VALUES ('$clienteEmail','$dentistaEmail', '$dia', '$horario')";
        $insert = mysqli_query($con, $slq_insert);

        if($insert) {
            echo "<script language='javascript' type='text/javascript'>
                        alert('Horário cadastrado com sucesso!');window.location.
                        href='http://localhost/odontosync/src/pages/page-client.php'
                </script>";
        } else {
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possivel cadastrar horário');window.location.
            href='http://localhost/odontosync/src/pages/page-client.php'</script>";
        }   
    }
    
   

?>