<?php

$idu = $_REQUEST["idusuario"];
$pass = $_REQUEST["pass"];

$db = new mysqli('127.0.0.1', 'fcopbz', '', 'c9'); $db->query("SET NAMES utf8");
$sql="update usuario set pass = '$pass' where id = $idu ";

if($db->query($sql))
{
    echo 'ok';
}

?>