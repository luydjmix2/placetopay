<?php

#$_SESSION['login'] = 'car';
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['login'])) {
    include("./vistas/login.php");
    exit;
} else {
    if ($_SESSION['login'] == 1) {
        #header("Location: ../index.php");
        //echo $_SESSION["paso"];
        switch ($_SESSION["paso"]) {
            case '01':
                include"./vistas/paso01.php";
                exit;
                break;
            case '02':
                header ("Location: https://registro.pse.com.co/PSEUserRegister/");
                exit;
                break;
            case '03':
                include"./vistas/paso01.php";
                exit;
                break;
        }
    }
}
?>