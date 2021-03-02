<?php
session_start();
session_destroy();
header("location:/odontosync/src/pages/login.php");
?>