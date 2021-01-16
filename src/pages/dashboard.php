<?php 
session_start();
if (!isset($_SESSION["autenticado"])) {
    session_destroy();
    header("location:/odontosync/src/index.html");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
</head>
<body>

    <table border>
        <tr>
            <th>Email</th>
            <th>Nome</th>
            <th>Privilégio da Pessoa</th>
        </tr>

        <tr> 
            <td>
                <?php echo $_SESSION["email"];?>                
            </td>
            <td>
                <?php echo $_SESSION["nome"];?>   
            </td>
            <td>
                <?php echo $_SESSION["priv_pessoa"];?>   
            </td>
        </tr>
       
    </table>
</body>
</html>