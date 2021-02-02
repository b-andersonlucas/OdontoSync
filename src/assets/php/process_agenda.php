<?php

session_start();
if (isset($_SESSION["autenticado"])) {
    
    header("location:/odontosync/src/index.html");
}

session_destroy();

if(isset($_POST['ok'])){



    //String Dcont = dataN.substring(0,2);
    //String Mcont = dataN.substring(3,5);
    //String Acont = dataN.substring(6);


    $email = isset($_POST[""])?$_POST[""]:"";
    $email1 = " a@a.o";
    $dataInicial = isset($_POST["serviceDay"])?$_POST["serviceDay"]:"";
    $inicoEX = isset($_POST["starHour"])?$_POST["starHour"]:"";
    $fimEX = isset($_POST[""])?$_POST[""]:"";
    $numeroPacientes = isset($_POST["numClients"])?$_POST["numClients"]:"";

    $dataDia= substr($dataInicial, 0, 2) ;
    $dataMes= substr($dataInicial, 3, 5);
    $dataAno= substr($dataInicial, 6);

    $dataFinal = $dataAno."/".$dataMes."/".$dataDia;

    include('connection.php');


    $sql = "insert into Agenda_dentista values('{$email}','{$dataFinal}','{$inicoEX}','{$fimEX}',$numeroPacientes);";
    $sql1 = "insert into Agenda_dentista values('{$email1}','{$dataFinal}',$numeroPacientes);";
    $conexao = mysqli_connect('localhost', 'root', '', 'OdontoSync');

    mysqli_query($conexao,$sql1) or die (" falha ao inserir :".mysqli_error(""));


}


// insert into Agenda_dentista values('a@a.o','2021/01/15',6);

?>