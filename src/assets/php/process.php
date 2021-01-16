<?php 

session_start();
if (isset($_SESSION["autenticado"])) {
    
    header("location:/odontosync/src/index.html");
}

session_destroy();

if (isset($_POST["ok"])) {
    $user = isset($_POST["user"])?$_POST["user"]:"";
    $password = isset($_POST["password"])?$_POST["password"]:"";

    include('connection.php');

    $sql = "SELECT email, nome, priv_pessoa FROM pessoa WHERE usuario = '$user' and senha = '$password'";

    $resultado = mysqli_query($con, $sql);

    mysqli_close($con);
 

    if (mysqli_num_rows($resultado) > 0){
        session_start();
        $linha = mysqli_fetch_array($resultado, MYSQLI_BOTH);
        $_SESSION["autenticado"] = true;
        $_SESSION["email"] = $linha["email"];
        $_SESSION["nome"] = $linha["nome"];
        $_SESSION["priv_pessoa"] = $linha["priv_pessoa"];
        header("location:/odontosync/src/pages/dashboard.php");
    } else {
        header("location:/odontosync/src/pages/login.html");
    }
   
} else {
    header("location:/odontosync/src/index.html");
}