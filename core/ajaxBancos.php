<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * almacenamiento y consulta de lista de bancos mediante xml
 */
$consulta = addslashes(htmlspecialchars($_POST["consulta"]));
$respuesta = array();
$time = time();
$date = date("Ymd");
$timeB = (time() + 86400);
if ($consulta == '0') {


    //$bancos = addslashes(htmlspecialchars($_POST["bancos"]));
    $bancos = array(array("Id" => "01", "banco" => "Bancolombia"), array("Id" => "02", "banco" => "Banco de Bogota"), array("Id" => "03", "banco" => "BBVA"), array("Id" => "04", "banco" => "CityBanck"));
    $respuesta = array("estado" => crear($bancos, $timeB));
} elseif ($consulta == '1') {
    //$respuestaA = leer($ipCl);
    if (!is_null(leer())) {
        $respuestaA = leer();
        //print_r($respuestaA);
        if ($respuestaA['tiempo'] <= $time) {
            unlink(__DIR__ . '/listaBancos.xml');
        } else {
            $respuesta = leer();
        }
        
    }
}

echo json_encode($respuesta);

//Para crear el archivo
function crear($bancos, $tiem) {
    $xml = new DomDocument('1.0', 'UTF-8');

    $listaBancos = $xml->createElement('listaBancos');
    $listaBancos = $xml->appendChild($listaBancos);

    $dataPrevia = $xml->createElement('dataPrevia');
    $dataPrevia = $listaBancos->appendChild($dataPrevia);

    // Agregar un atributo al libro
    //$libro->setAttribute('seccion', 'favoritos');
    //print_r($bancos);
    foreach ($bancos as $valorB):
        //print_r($valorB);
        //echo $valorB['Id'];
        $bancos = $xml->createElement('bancos');
        $bancos = $dataPrevia->appendChild($bancos);

        $listaId = $xml->createElement('listaId', $valorB['Id']);
        $listaId = $bancos->appendChild($listaId);

        $listaBanco = $xml->createElement('listaBanco', $valorB['banco']);
        $listaBanco = $bancos->appendChild($listaBanco);

    endforeach;

    if (file_exists('listaBancos.xml')) {
        $lectura = leer();
        //echo $lectura[tiempo];
        $tiempo = $xml->createElement('tiempo', $lectura['tiempo']);
        $tiempo = $dataPrevia->appendChild($tiempo);
        unlink(__DIR__ . '/listaBancos.xml');
    } else {
        $tiempo = $xml->createElement('tiempo', $tiem);
        $tiempo = $dataPrevia->appendChild($tiempo);
    }

    $xml->formatOutput = true;
    $el_xml = $xml->saveXML();
    if ($xml->save('listaBancos.xml')) {
        $respuesta = 'Ok';
    } else {
        $respuesta = 'No se pudo guardar la informacion';
    }

    return($respuesta);
}

//Para leerlo
function leer() {
    $salida = "";
    $salidaA = array();
    if (file_exists('listaBancos.xml')) {
        $xml = simplexml_load_file('listaBancos.xml');
        //print_r($xml->dataPrevia);
        for ($i = 0; $i <= 3; $i++) {
            $id01 = str_replace('{"0":"', '', $xml->dataPrevia->bancos->$i->listaId);
            $id = str_replace('"}', '', $xml->dataPrevia->bancos->$i->listaId);
            $banco01 = str_replace('{"0":"', '', $xml->dataPrevia->bancos->$i->listaBanco);
            $banco = str_replace('"}', '', $xml->dataPrevia->bancos->$i->listaBanco);
            $salidaA[$i] = array('A'.$id => $banco);
        }
        
        foreach ($xml->dataPrevia as $key => $item):
            $time01 = str_replace('{"0":"', '', $item->tiempo);
            $time = str_replace('"}', '', $item->tiempo);
            $tiempo = $time;

        endforeach;


        $salida = array("estado" => 'Ok', "listarBancos" => $salidaA, "tiempo" => $tiempo);
    } else {
        $salida = NULL;
    }
    //print_r($salidaA);
    return($salida);
}
