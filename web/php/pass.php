<?php
include("db.php");

$idu = $_REQUEST["idusuario"];
$pass = $_REQUEST["pass"];

$db =  obtenerConexion();  $db->query("SET NAMES utf8");
$sql="update usuario set pass = '$pass' where id = $idu ";

if($db->query($sql))
{
    echo 'ok';
}

?>