<?php

$idu = $_REQUEST["idusuario"];
$idc = $_REQUEST["idcomic"];

$db = new mysqli('127.0.0.1', 'fcopbz', '', 'c9'); $db->query("SET NAMES utf8");
$sql="delete from usuario_sigue_comic where idusuario = $idu and idcomic = $idc";

if($db->query($sql))
{
    echo 'ok';
}

?>