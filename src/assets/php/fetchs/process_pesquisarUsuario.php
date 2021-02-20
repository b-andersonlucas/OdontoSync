<?php
    include('../connection.php');

    $saida_pesquisa = '';
    $pesquisa = $_POST['nome_str'];
    $sql_select_pessoas = "SELECT * FROM `pessoa` WHERE nome like '%".$pesquisa."%' ";

    $resultado_pessoas = mysqli_query($con, $sql_select_pessoas);

    mysqli_close($con);

    while($linha = mysqli_fetch_array($resultado_pessoas))  
    {  
         $saida_pesquisa .= '  
         <tr>  
              <td>' .$linha["nome"]. '</td>  
              <td>'.$linha["email"].'</td>    
         </tr>  
         ';  
    }  

    if($saida_pesquisa == '') {
          echo $saida_pesquisa .= 'Usuário não encontrado!';
     } else {
          echo $saida_pesquisa;
     }         
?>