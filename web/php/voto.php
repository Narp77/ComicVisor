<?php

include("db.php");

$idu = $_REQUEST["idusuario"];
$idc = $_REQUEST["idcomic"];
$voto = $_REQUEST["voto"];

$db = obtenerConexion();   $db->query("SET NAMES utf8");
$sql="insert into usuario_vota_comic (idusuario, idcomic, voto) values ($idu, $idc, $voto)";

if($db->query($sql))
{
    echo 'ok';
}
else
{
    $sql="update usuario_vota_comic set voto = $voto where idcomic = $idc and idusuario = $idu";
    if($db->query($sql))
    {
        echo 'ok';
    }
}

?>