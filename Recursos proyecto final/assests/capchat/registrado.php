<?php
    session_start();
    if ($_POST['action'] == "checkdata") {
        if ($_SESSION['tmptxt'] == $_POST['tmptxt']) {
            echo "Bienvenido.";
        } else {
            echo "Intentalo nuevamente.";
        }
        exit;
    }
?>
