<?php
include("db.php");


$idu = $_REQUEST["idusuario"];
$idc = $_REQUEST["idcomic"];

$db = obtenerConexion(); $db->query("SET NAMES utf8");
$sql="insert into usuario_sigue_comic (idusuario, idcomic) values ($idu, $idc)";

if($db->query($sql))
{
    echo 'ok';
}

?>