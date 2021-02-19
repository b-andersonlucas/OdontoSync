<?php
    include '../connection.php';

    $outputSearch = '';
    $search = $_POST['name_str'];
    $sql_select_peoples = "SELECT * FROM `pessoa` WHERE nome like '%".$search."%' ";

    $result_selectPeoples = mysqli_query($con, $sql_select_peoples);

    mysqli_close($con);

    while($row = mysqli_fetch_array($result_selectPeoples))  
    {  
         $outputSearch .= '  
         <tr>  
              <td>' .$row["nome"]. '</td>  
              <td>'.$row["email"].'</td>    
         </tr>  
         ';  
    }  

    if($outputSearch == '') {
          echo $outputSearch .= 'Usuário não encontrado!';
     } else {
          echo $outputSearch;
     }         
?>