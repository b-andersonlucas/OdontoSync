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



if ($email != "" && $usuario != ""){

        include('connection.php');
        $sql = ("SELECT * FROM pessoa WHERE email = '$email' and usuario = '$usuario'");
        $query = mysqli_query($con, $sql);
        $num = mysqli_num_rows($query);

        if ($num > 0){   
                mysqli_close($con); 
                header("location:/odontosync/src/pages/registration.php");
        }

        $sql = "INSERT INTO `Pessoa` (email, usuario, senha, nome, telefone) VALUES ('$email', '$usuario', '$senha', '$nome', '$telefone');";

        mysqli_query($con, $sql);

        $sql = ("SELECT * FROM pessoa WHERE email = '$email' and usuario = '$usuario'");
        $query = mysqli_query($con, $sql);
        $num = mysqli_num_rows($query);
 
        if ($num > 0){
                
                mysqli_close($con); 
                header("location:/odontosync/src/pages/login.html");    
        }
        mysqli_close($con);  
}
header("location:/odontosync/src/pages/registration.php");
     
       



























//      if(isset($email)){

//             $sql = "SELECT email FROM `pessoa` WHERE email = $email";

//             $resultado = mysqli_query($con, $sql);

//             if ($resultado > 0) {
//             mysqli_close($con);
//             header("location:/odontosync/src/pages/registration.html");
//             }                 

//      } 







// session_start();
// if (isset($_SESSION["autenticado"])) {
    
//     header("location:/odontosync/src/index.html");
// }
// session_destroy();

// if (isset($_POST["ok"])) {

//     $email = isset($_POST["email"])?$_POST["email"]:"";
    
//     $sql = "SELECT * FROM `pessoa` WHERE email = $email";

//     include('connection.php');

//     $resultado = mysqli_query($con, $sql);

//     if (mysqli_num_rows($resultado) > 0) {
//         mysqli_close($con);
//         header("location:/odontosync/src/pages/registration.php");
//     } 





//     $usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
//     $senha = isset($_POST["senha"])?$_POST["senha"]:"";
//     $priv_pessoa = isset($_POST["priv_pessoa"])?$_POST["priv_pessoa"]:"";
//     $nome = isset($_POST["nome"])?$_POST["nome"]:"";
//     $telefone = isset($_POST["telefone"])?$_POST["telefone"]:"";
//     $cidade = isset($_POST["cidade"])?$_POST["cidade"]:"";
//     $data_nascimento = isset($_POST["data"])?$_POST["data"]:"";

//     $sql = "INSERT INTO `pessoa`('email', 'usuario', 'senha', 'priv_pessoa', 'nome', 'telefone') VALUES ($email, $usuario, $senha, $priv_pessoa, $nome, $telefone)";
//     $resultado = mysqli_query($con, $sql);

//     mysqli_close($con);

//     var_dump($resultado);

// } 



        // $erro = false;

        // if (!isset($_POST) || empty($_POST)) {
        //     $erro = 'NADA FOI POSTADO';
        // }

        // foreach($_POST as $chave => $valor){
        //     $$chave = trim(strip_tags($valor));
        //     if (empty($valor)) {
        //         $erro = 'EXISTEM CAMPOS EM BRANCO';
        //     }
        // }


