<?php

/*session_start();
if (isset($_SESSION["autenticado"])) {
    
    header("location:/odontosync/src/index.html");
}

session_destroy();
*/
if (isset($_POST['cadsHour'])) {

    include('connection.php');

    $nomeD; //= isset($_POST["dentist"]) ? $_POST["dentist"] : "";
    $email1 = isset($_POST["dentist"]) ? $_POST["dentist"] : "";
    $dataInicial = isset($_POST["serviceDay"]) ? $_POST["serviceDay"] : "";
    $inicoEX = isset($_POST["starHour"]) ? $_POST["starHour"] : "";
    $fimEX = isset($_POST["endHour"]) ? $_POST["endHour"] : "";
    $numeroPacientes = isset($_POST["numClients"]) ? $_POST["numClients"] : "";

    $dataFinal = str_replace("-", "/", $dataInicial);

    $sele= true;
    if($sele==true){
        $busca = "select nome from pessoa where email ='$email1'";
        $resultadob=mysqli_query($con,$busca);
        $arr = mysqli_fetch_array($resultadob);
        $nomeD = $arr['nome'];
        //echo $email1." email </br>";
        //echo $nomeD." nome</br>";
        $sql = "insert into Agenda_dentista values('$email1','$nomeD','$dataFinal',$numeroPacientes,'$inicoEX','$fimEX');";
   // echo $sql." query</br>";
        mysqli_query($con, $sql) or die(" falha ao inserir ");
        header("location:/odontosync/src/pages/page-admin.php");
    }

    

    //
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
    $dentista;
    $dentistaEmail= isset($_POST["dentista"]) ? $_POST["dentista"] : "";

    $dataFinal2 = str_replace("-", "/", $dataInicial2);

    $sele= true;
    if($sele==true){
        $busca = "select nome from pessoa where email ='$dentistaEmail'";
        $resultadob=mysqli_query($con,$busca);
        $arr = mysqli_fetch_array($resultadob);
        $dentista = $arr['nome'];

        $sql2 = "insert into Historico values('$emailClient','$nome','$dentistaEmail','$dentista','$dataFinal2','$hora','$procedure');";
            //echo $sql2." query</br>";

        mysqli_query($con, $sql2) or die(" falha ao inserir ");
        header("location:/odontosync/src/pages/page-admin.php");
    }

    
    //

    /*
    echo $dentista ."</br>";
    echo $nome ."</br>";
    echo $emailClient ."</br>";
    echo $procedure ."</br>";
    echo $dataInicial2 ."</br>";
    echo $dataFinal2 ."</br>";
    echo $hora ."</br>";
    echo $dentista. "</br>";
    echo $sql2. "</br>";
    */
    //insert into Historico values('d@i.o','dickson','ze','21/01/15','17:30','arranquei o dente pela raiz');
    //insert into Historico values('d@i.o','a@a.o','21/01/15','17:30','arranquei o dente pela raiz');

}
if (isset($_POST['cadsPe'])) {
    
    include('connection.php');

    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
    $dataNasInicial = isset($_POST["dataNas"]) ? $_POST["dataNas"] : "";
    $telefone = isset($_POST["numeroTelefone"]) ? $_POST["numeroTelefone"] : "";
    $cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : "";

    $user = isset($_POST["cadUser"]) ? $_POST["cadUser"] : "";
    $emailAc = isset($_POST["emailA"]) ? $_POST["emailA"] : "";
    $senha1 = isset($_POST["senha1"]) ? $_POST["senha1"] : "";
    $senha2 = isset($_POST["senha2"]) ? $_POST["senha2"] : "";
    $privilegio = "c";//isset($_POST[""]) ? $_POST[""] : "";

    $dataNasFinal = str_replace("-", "/", $dataNasInicial);

    $senhaFinal = null;

    
    if($senha1===$senha2){
        $senhaFinal = $senha1;

        $busca = "select usuario from pessoa where usuario ='$user'";
        
        $resultado=mysqli_query($con,$busca);

        $arr = mysqli_fetch_array($resultado);
        $recArr = isset($arr['usuario']);

        if($recArr == $user){
            //echo $recArr." esse é resultado</br>";
            echo "erro: usuario já está sendo utilizado, por favor escolha um novo </br>";
            //echo $user." usuario <br>";
        }elseif($user != $recArr){

            //echo $recArr." resultado</br>";
            echo "usuario valido para ser usado. o seu cadastro será efetuado</br>";
            //echo $user." usuario <br>";

            $sql3p1 = "insert into Pessoa values('$emailAc', '$user', '$senhaFinal', '$privilegio', '$nome', '$telefone');";
            $sql3p2 = "insert into Cliente values ('$emailAc', '$cidade', '$dataNasFinal');";

            //echo $sql3p1."</br>";
            //echo $sql3p2."</br>";

            mysqli_query($con, $sql3p1) or die(" falha ao inserir ");
            mysqli_query($con, $sql3p2) or die(" falha ao inserir ");

            //header("location:/odontosync/src/pages/page-admin.php");
        }
    }else{
        echo "as senhas estão diferentes</br>";
    }

    /*
    echo $nome." <br>";
    echo $dataNasInicial." <br>";
    echo $dataNasFinal." <br>";
    echo $telefone." <br>";
    echo $cidade." <br>";
    echo $user." <br>";
    echo $emailAc." <br>";
    echo $senha1." <br>";
    echo $senha2." <br>";
    echo $senhaFinal." <br>";
    */

    

   //
   //insert into Pessoa values('d@i.o', 'dickson', '123', 'c', 'dickson teixeira', '(84) 99999-9999');
   //insert into Cliente values ('d@i.o', 'serrinha', '2002/02/22');
}
