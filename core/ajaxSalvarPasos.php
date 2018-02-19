<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * cargal al informacion de salvar paso 01 en la base dedatos y dar paso a el paso 02
 */
$consulta = addslashes(htmlspecialchars($_POST["consulta"]));
session_start();
include_once'../config/placetopay.php';

switch ($consulta) {
    case '01':
        $username = addslashes(htmlspecialchars($_POST['username']));

        $password = addslashes(htmlspecialchars($_POST['password']));
        
        $sqlN = "SELECT * FROM usuarios WHERE name = '".$_SESSION['userName']."'";
        
        $result = $conexion->query($sql);
        
        if($row = $result->fetch_array(MYSQLI_ASSOC)){
            
            $sql = "INSERT INTO `carritoCompra` (`idCarrito`, `idCliente`, `tipoCUenta`, `bancoCliente`, `valorPagoTotal`, `ipclinte`, `navegadorCliente`, `fechaHora`, `urlDesvio`) VALUES (NULL, ".$row['passwd'].", 'per', '01', '100000', '186.31.88.82', 'cheomsgdfhjsdfjhsagfdhjasf skdfhjshfasfd*as/dfas54f544sfshjdfhksjhfds0df9sa849e7te8876&/(&/(', '2018-02-19', 'http://fjhaskdfhksjahfdkjasfd.sadfhjsfd');";
        }
        
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            
        }
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($password == $row['passwd']) {

            unset($_SESSION["paso"]);
            $_SESSION["paso"] = '02';
            $respuesta = array("estado" => "Ok");
        } else {
            $respuesta = array("estado" => false);
        }

        break;
    case '02':

        break;
}