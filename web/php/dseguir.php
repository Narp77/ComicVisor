<?php
include("db.php");

$idu = $_REQUEST["idusuario"];
$idc = $_REQUEST["idcomic"];

$db = obtenerConexion();  $db->query("SET NAMES utf8");
$sql="delete from usuario_sigue_comic where idusuario = $idu and idcomic = $idc";

if($db->query($sql))
{
    echo 'ok';
}

?>