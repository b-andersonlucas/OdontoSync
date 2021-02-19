<?php
    function getDentists() {
        include '../assets/php/connection.php';

        $sql_select = "SELECT email, nome, priv_pessoa FROM pessoa WHERE priv_pessoa = 'd' ORDER BY nome ASC";
        $result_select = mysqli_query($con, $sql_select);

        $output = '';


        while($row = mysqli_fetch_array($result_select)) {
            $output .= '<option value="'.$row["nome"].'">'.$row["nome"].'</option>';
        }

        return $output;
    }
?>