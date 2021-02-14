<?php
    include "../connection.php";

    $outputClient = '';
    
    $email_client = $_POST['emailClient'];

    $sql_select_client = "SELECT * FROM pessoa, cliente WHERE email = '".$email_client."'";
    $result_select_client = mysqli_query($con, $sql_select_client);

    $row = mysqli_fetch_array($result_select_client);
    if($row == null || $row == "") {
        $outputClient .= 'Dados indisponiveis';
    } else {
        $birth_date = date("d/m/Y", strtotime($row["data_nascimento"]));


        $outputClient .= '
            <thead>
                <tr>
                    <th>Nome</th>
                    <th id="namePeople">'.$row["nome"].'</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>E-mail</td>
                    <td id="emailPeople">'.$row["email"].'</td>
                </tr>
                <tr>
                    <td>Data de nascimento</td>
                    <td>'.$birth_date.'</td>
                </tr>
                <tr>
                    <td>Telefone</td>
                    <td id="telPeople">'.$row["telefone"].'</td>
                </tr>
                <tr>
                    <td>Cidade/UF</td>
                    <td>'.$row["cidade"].'/RN</td>
                </tr>
            </tbody>
        ';
    }

    echo $outputClient;

?>