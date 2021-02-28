<?php 
session_start();
if (!(isset($_SESSION["autenticado"]))) {
    session_destroy();
    header("location:/odontosync/src/pages/login.php");
} elseif ($_SESSION["autenticado"] != $p) {
    header("location:/odontosync/src/assets/php/process-login.php");
} 
