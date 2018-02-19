<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * consylta de usuario y contraseña de sesion y confirmacion de la session
 * alta de sesion
 */

session_start();
include_once'../config/placetopay.php';

$respuesta = array();

$username = addslashes(htmlspecialchars($_POST['username']));

$password = addslashes(htmlspecialchars($_POST['password']));

$sql = "SELECT * FROM usuarios WHERE name = '$username'";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    
}
$row = $result->fetch_array(MYSQLI_ASSOC);
if ($password == $row['passwd']) {

    $_SESSION['login'] = true;
    $_SESSION['userName'] = $username;
    $_SESSION["paso"] = '01';
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
    $respuesta = array("estado" => $_SESSION['login'], "user" => $_SESSION['userName'], "timeIni" => $_SESSION['start'], "timeEnd" => $_SESSION['expire']);
} else {
    $respuesta = array("estado" => false );
}

echo json_encode($respuesta);
mysqli_close($conexion);

