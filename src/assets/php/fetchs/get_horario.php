<?php
if(isset($_POST["dentista"])){
    include('../connection.php');

    $horarios = '';

    $dentistaEmail = $_POST["dentista"];

    $sql_select = "SELECT * FROM agenda_dentista WHERE dentista_email = '".$dentistaEmail."'";
   

    $resultado = mysqli_query($con, $sql_select);
    
    mysqli_close($con);

    $linha = mysqli_fetch_array($resultado);

    $inicio_ex = strtotime($linha["inicio_ex"]);
    $fim_ex = strtotime($linha["fim_ex"]);

    $numClientes = $linha["n_clientes"];

    $intervalo = ($fim_ex - $inicio_ex)/$numClientes;
    
    
    $cont = 1;
    while($cont < $numClientes+1) {
        $horarioReservado = gmdate("H:i", ($inicio_ex + $intervalo*$cont));
       
            $horarios .= '<option value="'.$horarioReservado.'">'.$horarioReservado.'</option>';
            $cont++;
        
    }

    echo $horarios; 
}


     
?>