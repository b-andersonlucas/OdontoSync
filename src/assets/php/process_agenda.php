<?php

/*session_start();
if (isset($_SESSION["autenticado"])) {
    
    header("location:/odontosync/src/index.html");
}

session_destroy();
*/
if(isset($_POST['ok'])){

    //String Dcont = dataN.substring(0,2);
    //String Mcont = dataN.substring(3,5);
    //String Acont = dataN.substring(6);

    /*
    $email = isset($_POST[""])?$_POST[""]:"";
    $email1 = "a@a.o";
    $dataInicial=$_POST["serviceDay"];
    $inicoEX = $_POST["starHour"];
    $fimEX = $_POST["endHour"];
    $numeroPacientes = $_POST["numClients"];
    */
    
    /*
    $dataAno= substr($dataInicial, 0, 4) ;
    $dataMes= substr($dataInicial, 5, 6);
    $dataDia= substr($dataInicial, 8);
    */
    //$dataFinal = $dataAno."/".$dataMes."/".$dataDia;
    
    //testando as variaveis
    /* 
    echo $email1."<br>";
    echo $dataFinal."essa é a data final <br>";
    echo $dataInicial."essaa é a data incial<br>";
    echo $inicoEX."<br>";
    echo $fimEX."<br>";
    echo $numeroPacientes."<br>";
    */
    //echo $sql;
    //$sql1 = "insert into Agenda_dentista values('{$email1}','{$dataFinal}',$numeroPacientes);";
    //$conexao = mysqli_connect('localhost', 'root', '', 'OdontoSync');
    // insert into Agenda_dentista values('a@a.o','2021/01/15',6);
    
    include('connection.php');
    
    $email = isset($_POST[""])?$_POST[""]:"";
    $email1 = "a@a.o";
    $dataInicial = isset($_POST["serviceDay"])?$_POST["serviceDay"]:"";
    $inicoEX = isset($_POST["starHour"])?$_POST["starHour"]:"";
    $fimEX = isset($_POST["endHour"])?$_POST["endHour"]:"";
    $numeroPacientes = isset($_POST["numClients"])?$_POST["numClients"]:"";
    
    $dataFinal = str_replace("-","/",$dataInicial);

    $sql = "insert into Agenda_dentista values('$email1','$dataFinal',$numeroPacientes,'$inicoEX','$fimEX');";

    mysqli_query($con,$sql) or die (" falha ao inserir ");

    header("location:/odontosync/src/pages/page-admin.html");

}




?>