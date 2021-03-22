<?php
if(isset($_POST["dentista"])){
    include('../connection.php');

    $horarios = '';

    $dentistaEmail = $_POST["dentista"];
    $dia__selecionado = $_POST["diaAlvo"];

    $sql_select = "SELECT * FROM agenda_dentista WHERE dentista_email = '".$dentistaEmail."' AND dia = '".$dia__selecionado."' ORDER BY dia DESC";
    $resultado = mysqli_query($con, $sql_select);
    

    $linha = mysqli_fetch_array($resultado, MYSQLI_BOTH);

    $inicio_ex = strtotime($linha["inicio_ex"]);
    $fim_ex = strtotime($linha["fim_ex"]);
    $numClientes = $linha["n_clientes"];
    $dia = $linha["dia"];
    $intervalo = ($fim_ex - $inicio_ex)/$numClientes;
    
    $cont = 1;
    while($cont < $numClientes+1) {
        $horarioLivre = gmdate("H:i", ($inicio_ex + $intervalo*$cont));

        $sql_selectHorarios = "SELECT * FROM horarios WHERE dia = '".$dia."' AND  horario = '".$horarioLivre.":00'";
        $resultadoHorarios = mysqli_query($con, $sql_selectHorarios);
        $arr = mysqli_fetch_array($resultadoHorarios, MYSQLI_BOTH);
        $resArr = isset($arr["horario"]);

        if($horarioLivre != $resArr) {
            $horarios .= '<option value="'.$horarioLivre.'">'.$horarioLivre.'</option>';
        }
        $cont++;
        
    }

    echo $horarios;
}
?>