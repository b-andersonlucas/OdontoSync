<?php
    include('connection.php');

    $clienteEmail = $_POST["email"];
    $dia = $_POST["dia"];
    $dentistaEmail = $_POST["dentista"];
    $horario = $_POST["hora"];

    $slq_insert = "INSERT INTO horarios VALUES ('$clienteEmail','$dentistaEmail', '$dia', '$horario')";

    if(mysqli_query($con, $slq_insert)) {
        header("location:/odontosync/src/pages/page-client.php");
    } else {
         die("Erro ao inserir");
    }   
    
   

?>