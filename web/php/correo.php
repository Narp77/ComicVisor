<?php
include("db.php");

$idu = $_REQUEST["idusuario"];
$correo = $_REQUEST["correo"];

$db = obtenerConexion();  $db->query("SET NAMES utf8");
$sql="update usuario set correo = '$correo' where id = $idu ";

if($db->query($sql))
{
    echo 'ok';
}

?>