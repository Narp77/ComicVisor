<?php
  include("db.php");
  
  $idu = $_REQUEST["id"];
  $idcocmic = $_REQUEST["comic2"];
  $capitulo = $_REQUEST["ncapitulo"];
  $titulo = $_REQUEST["titulo"];
  
  $db = obtenerConexion(); $db->query("SET NAMES utf8");
  $sql="insert into capitulo (id, idcomic, numero, titulo, fecha_salida) values ( null, $idcocmic, $capitulo, '$titulo', CURDATE())";
  
  if($db->query($sql))
  {
    header('Location: /web/correcto');
  }
  else{
    header('Location: /web/error');
  }
  echo $sql;
  ?>