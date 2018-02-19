<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_placetopay = "localhost";
$database_placetopay = "lesframe_placetopay";
$username_placetopay = "lesframe_placetU";
$password_placetopay = ".i(sY$57utI#";
$conexion = new mysqli($hostname_placetopay, $username_placetopay, $password_placetopay, $database_placetopay);
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
?>