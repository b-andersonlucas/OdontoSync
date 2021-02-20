<?php
    function getDentistas() {
        include('../assets/php/connection.php');

        $sql_select = "SELECT email, nome, priv_pessoa FROM pessoa WHERE priv_pessoa = 'd' ORDER BY nome ASC";
        $resultadoSelect = mysqli_query($con, $sql_select);

        mysqli_close($con);

        $saida = '';


        while($linha = mysqli_fetch_array($resultadoSelect)) {
            $saida .= '<option value="'.$linha["nome"].'">'.$linha["nome"].'</option>';
        }

        if($saida == '') {
            return $saida .= 'Não foi possivel carregar os dados!';
        } else {
            return $saida;    
        }
    }
?>