<?php //retirado session_start();
if (!(isset($_SESSION["autenticado"]))) {
    header("location:/odontosync/src/assets/php/logout.php");
} elseif (isset($pc) && isset($pd) && !(isset($ps))) {
    if (!($_SESSION["autenticado"] === "c" ||  $_SESSION["autenticado"] === "d")) {
        header("location:/odontosync/src/assets/php/process-login.php");
    }
} elseif (isset($pc) && !(isset($pd)) && isset($ps)) {
    if (!($_SESSION["autenticado"] === "c" ||  $_SESSION["autenticado"] === "s")) {
        header("location:/odontosync/src/assets/php/process-login.php");
    }
} elseif (!(isset($pc)) && isset($pd) && isset($ps)) {
    if (!($_SESSION["autenticado"] === "d" ||  $_SESSION["autenticado"] === "s")) {
        header("location:/odontosync/src/assets/php/process-login.php");
    }
} elseif (isset($pc) && $_SESSION["autenticado"] != "c" ) {
    header("location:/odontosync/src/assets/php/process-login.php");
} elseif (isset($pd) && $_SESSION["autenticado"] != "d" ) {
    header("location:/odontosync/src/assets/php/process-login.php");
} elseif (isset($ps) && $_SESSION["autenticado"] != "s" ) {
    header("location:/odontosync/src/assets/php/process-login.php");
} elseif (isset($_SESSION["autenticado"]) && $_SESSION["autenticado"] != "c" && $_SESSION["autenticado"] != "d" && $_SESSION["autenticado"] != "s") {
    header("location:/odontosync/src/assets/php/logout.php");
}