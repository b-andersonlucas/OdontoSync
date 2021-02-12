<?php

/*session_start();
if (isset($_SESSION["autenticado"])) {
    
    header("location:/odontosync/src/index.html");
}

session_destroy();
*/
if (isset($_POST['cadsHour'])) {

    include('connection.php');

    $email = isset($_POST[""]) ? $_POST[""] : "";
    $email1 = "a@a.o";
    $dataInicial = isset($_POST["serviceDay"]) ? $_POST["serviceDay"] : "";
    $inicoEX = isset($_POST["starHour"]) ? $_POST["starHour"] : "";
    $fimEX = isset($_POST["endHour"]) ? $_POST["endHour"] : "";
    $numeroPacientes = isset($_POST["numClients"]) ? $_POST["numClients"] : "";

    $dataFinal = str_replace("-", "/", $dataInicial);

    $sql = "insert into Agenda_dentista values('$email1','$dataFinal',$numeroPacientes,'$inicoEX','$fimEX');";

    mysqli_query($con, $sql) or die(" falha ao inserir ");

    header("location:/odontosync/src/pages/page-admin.html");
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
}
if (isset($_POST['medRecord'])) {
    include('connection.php');

    $nome = isset($_POST["cli_name"]) ? $_POST["cli_name"] : "";
    $emailClient = isset($_POST["cli_email"]) ? $_POST["cli_email"] : "";
    $procedure = isset($_POST["procedure"]) ? $_POST["procedure"] : "";
    $dataInicial2 = isset($_POST["day"]) ? $_POST["day"] : "";
    $hora = isset($_POST["hour"]) ? $_POST["hour"] : "";
    $dentist = "ze"; //isset($_POST["dentist"]) ? $_POST["dentist"] : "";

    $dataFinal2 = str_replace("-", "/", $dataInicial2);

    $sql2 = "insert into Historico values('$emailClient','$nome','$dentist','$dataFinal2','$hora','$procedure');";

    mysqli_query($con, $sql2) or die(" falha ao inserir ");
    header("location:/odontosync/src/pages/page-admin.html");

    echo "$nome <br>";
    echo "$emailClient <br>";
    echo "$procedure <br>";
    echo "$dataInicial2 <br>";
    echo "$dataFinal2 <br>";
    echo "$hora <br>";
    echo "$dentist <br>";
    echo "$sql2 <br>";
    //insert into Historico values('d@i.o','dickson','ze','21/01/15','17:30','arranquei o dente pela raiz');
    //insert into Historico values('d@i.o','a@a.o','21/01/15','17:30','arranquei o dente pela raiz');
    
}
