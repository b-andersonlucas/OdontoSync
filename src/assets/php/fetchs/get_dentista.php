<?php
    function getDentistas() {
        include('../assets/php/connection.php');

        $sql_select = "SELECT email, nome, priv_pessoa FROM pessoa WHERE priv_pessoa = 'd' ORDER BY nome ASC";
        $resultadoSelect = mysqli_query($con, $sql_select);

        mysqli_close($con);

        $saida = '';


        while($linha = mysqli_fetch_array($resultadoSelect)) {
            $saida .= '<option value="'.$linha["email"].'">'.$linha["nome"].'</option>';
        }

        if($saida == '') {
            return $saida .= 'Não foi possivel carregar os dados!';
        } else {
            return $saida;    
        }
    }

    if(isset($_POST["diaInput"])) {
        include('../connection.php');

        $dentista = '';

        $diaSelecionado = $_POST["diaInput"];

        $slq_select = "SELECT nome_dentista FROM agenda_dentista WHERE dia = '".$diaSelecionado."'";

        $resultado = mysqli_query($con, $slq_select);
        
        mysqli_close($con);

        while($linha = mysqli_fetch_array($resultado)) {
            $dentista .= '<option value="'.$linha["nome_dentista"].'">'.$linha["nome_dentista"].'</option>';
        }

        if($dentista == '') {
            echo "Erro ao carregar dentistas!";
        } else {
            echo $dentista;
        }

    }
?>