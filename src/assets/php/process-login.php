<?php 
session_start();
if (!(isset($_SESSION["autenticado"]))) {
    session_destroy();
    if (isset($_POST["ok"])) {
        $usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
        $password = isset($_POST["password"])?$_POST["password"]:"";
    
        include('connection.php');
    
        $sql = "SELECT email, nome, telefone, usuario, priv_pessoa FROM pessoa WHERE usuario = '$usuario' and senha = '$password'";
    
        $resultado = mysqli_query($con, $sql);

        if (mysqli_num_rows($resultado) > 0){
            session_start();
    
            $linha = mysqli_fetch_array($resultado, MYSQLI_BOTH);
            $email = $linha["email"];
            $_SESSION["autenticado"] = $linha["priv_pessoa"];
            $_SESSION["email"] = $linha["email"];
            $_SESSION["nome"] = $linha["nome"];
            $_SESSION["telefone"] = $linha["telefone"];
            $_SESSION["usuario"] = $linha["usuario"];
            $d = explode(" ", $_SESSION["nome"]);
            $_SESSION["primeiroNome"] =  $d[0];
        
            if ($_SESSION["autenticado"] === "c") { //caso cliente
                $sql = "SELECT cidade, data_nascimento FROM pessoa, cliente WHERE email = '$email' and cliente.pessoa_email = pessoa.email";
                $resultado = mysqli_query($con, $sql);
                $linha = mysqli_fetch_array($resultado, MYSQLI_BOTH);
                $_SESSION["cidade"] = $linha["cidade"];
                $_SESSION["data_nascimento"] = $linha["data_nascimento"];
    
            } elseif ($_SESSION["autenticado"] === "d") { //caso dentista
                $sql= "SELECT codigo_registro FROM pessoa, dentista WHERE email = '$email' and dentista.pessoa_email = pessoa.email";
                $resultado= mysqli_query($con, $sql);
                $linha= mysqli_fetch_array($resultado, MYSQLI_BOTH);
                $_SESSION["codigo_registro"] = $linha["codigo_registro"];
    
            } elseif ($_SESSION["autenticado"] === "s") { //caso secretária
                $sql = "SELECT data_vinculo FROM pessoa, secretaria WHERE email = '$email' and secretaria.pessoa_email = pessoa.email";
                $resultado = mysqli_query($con, $sql);
                $linha = mysqli_fetch_array($resultado, MYSQLI_BOTH);
                $_SESSION["data_vinculo"] = $linha["data_vinculo"];
    
            } else {
                session_destroy();
            }
        }
        mysqli_close($con);
    } else {
        header("location:/odontosync/src/pages/login.php?msg=ErroAcessoNaoAutorizado");
    }
    if (!(isset($_SESSION["autenticado"]))) {
        header("location:/odontosync/src/pages/login.php?msg=NaoAutenticado");
    } else {
        header("location:./process-login.php"); 
    }
} elseif ($_SESSION["autenticado"] === "c") {
    header("location:/odontosync/src/pages/page-client.php");
} elseif ($_SESSION["autenticado"] === "d") {
    header("location:/odontosync/src/pages/page-admin.php?t=dentista");
} elseif ($_SESSION["autenticado"] === "s") {
    header("location:/odontosync/src/pages/page-admin.php?t=secretaria");
} else {
    session_destroy();
    header("location:/odontosync/src/pages/login.php?msg=ErroDePrivilegio");
}

