<?php
    include("../connection.php");

    $saida_dados = '';
    
    $email_Cliente = $_POST['emailCliente'];

    $sql_select_cliente = "SELECT * FROM pessoa, cliente WHERE pessoa.email = '".$email_Cliente."' AND cliente.pessoa_email = '".$email_Cliente."'";
    $resultado_select = mysqli_query($con, $sql_select_cliente);

    $linha = mysqli_fetch_array($resultado_select);
    if($linha == null || $linha == "") {
        $saida_dados .= 'Dados indisponiveis';
    } else {
        $dataNasc = date("d/m/Y", strtotime($linha["data_nascimento"]));


        $saida_dados .= '
            <thead>
                <tr>
                    <th>Nome</th>
                    <th id="nomePessoa">'.$linha["nome"].'</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>E-mail</td>
                    <td id="emailPessoa">'.$linha["email"].'</td>
                </tr>
                
                <tr>
                    <td>Data de nascimento</td>
                    <td>'.$dataNasc.'</td>
                </tr>
                <tr>
                    <td>Telefone</td>
                    <td id="telPessoa">'.$linha["telefone"].'</td>
                </tr>
                <tr>
                    <td>Cidade/UF</td>
                    <td>'.$linha["cidade"].'/RN</td>
                </tr>
            </tbody>
        ';
    }

    echo $saida_dados;

?>