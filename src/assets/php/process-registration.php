<?php 

session_start();
if (isset($_SESSION["autenticado"])) {
        header("location:/odontosync/src/index.html");
}
session_destroy();


$email = isset($_POST["email"])?$_POST["email"]:"";
$usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
$senha = isset($_POST["senha"])?$_POST["senha"]:"";
$nome = isset($_POST["nome"])?$_POST["nome"]:"";
$telefone = isset($_POST["telefone"])?$_POST["telefone"]:"";
$cidade = isset($_POST["cidade"])?$_POST["cidade"]:"";
$data_nascimento = isset($_POST["data_nascimento"])?$_POST["data_nascimento"]:"";



if ($email != "" && $usuario != ""){

        include('connection.php');
        $sql = ("SELECT * FROM pessoa WHERE email = '$email' and usuario = '$usuario'");
        $query = mysqli_query($con, $sql);
        $num = mysqli_num_rows($query);

        if ($num > 0){   
                mysqli_close($con); 
                header("location:/odontosync/src/pages/registration.php");
        }

        $sql = "INSERT INTO `Pessoa` (email, usuario, senha, nome, telefone, priv_pessoa) VALUES ('$email', '$usuario', '$senha', '$nome', '$telefone', 'c');"; 
        
        mysqli_query($con, $sql);

        $sql = "INSERT INTO `cliente` (pessoa_email, cidade, data_nascimento)  VALUES ('$email','$cidade', '$data_nascimento');";

        mysqli_query($con, $sql);

        $sql = ("SELECT * FROM pessoa WHERE email = '$email' and usuario = '$usuario'");
        $query = mysqli_query($con, $sql);
        $num = mysqli_num_rows($query);
 
        if ($num > 0){
                mysqli_close($con); 
                header("location:/odontosync/src/pages/login.php");    
        }
        mysqli_close($con);  
}
header("location:/odontosync/src/pages/registration.php");