<?php

$idu = $_REQUEST["idusuario"];
$correo = $_REQUEST["correo"];

$db = new mysqli('127.0.0.1', 'fcopbz', '', 'c9'); $db->query("SET NAMES utf8");
$sql="update usuario set correo = '$correo' where id = $idu ";

if($db->query($sql))
{
    echo 'ok';
}

?>