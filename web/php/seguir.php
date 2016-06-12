<?php

$idu = $_REQUEST["idusuario"];
$idc = $_REQUEST["idcomic"];

$db = new mysqli('127.0.0.1', 'fcopbz', '', 'c9'); $db->query("SET NAMES utf8");
$sql="insert into usuario_sigue_comic (idusuario, idcomic) values ($idu, $idc)";

if($db->query($sql))
{
    echo 'ok';
}

?>