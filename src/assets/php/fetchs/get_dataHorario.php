<?php
    function diasAtendimento(){
        include('../assets/php/connection.php');

        $diaAtual = date("Y/m/d");
        $sql_select = "SELECT DISTINCT dia FROM agenda_dentista WHERE dia >= '".$diaAtual."'";
        $resultadoSelect = mysqli_query($con, $sql_select);

        mysqli_close($con);

        $dias= '';

        while($linha = mysqli_fetch_array($resultadoSelect)) {
            $diaFormatado = date("d/m/Y", strtotime($linha["dia"]));
            $dias .= '<option value="'.$linha["dia"].'">'.$diaFormatado.'</option>';
        }

        if($dias == '') {
            return $dias = 'Não há horario de atendimento cadastrado';
        } else {
            return $dias;
        }
    }
?>