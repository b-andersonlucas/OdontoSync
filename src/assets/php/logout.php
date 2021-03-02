<?php
session_start();
session_destroy();
header("location:/odontosync/src/index.html");
?>