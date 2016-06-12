<?php

  $idu = $_REQUEST["id"];
  $nombre = $_REQUEST["nombre"];
  $autor = $_REQUEST["autor"];
  $estado = $_REQUEST["estado"];
  $descripcion = $_REQUEST["descripcion"];
  $nportada = $_REQUEST["nportada"];
  $categoria = $_REQUEST["categoria"];
  
  $nombre2 = $_FILES['portada']['name'];
  $partes_nombre = explode('.', $nombre2);
  $portada= $partes_nombre[0];
  $nombre_tmp = $_FILES['portada']['tmp_name'];
  $tipo = $_FILES['portada']['type'];
  $tamano = $_FILES['portada']['size'];
 
  $ext_permitidas = array('jpg');
  $partes_nombre = explode('.', $nombre2);
  $extension = end( $partes_nombre );
  $ext_correcta = in_array($extension, $ext_permitidas);
 
  
  
  if( $ext_correcta){
    if( $_FILES['portada']['error'] == 0 ){
      
      
    
   
  
  $db = new mysqli('127.0.0.1', 'fcopbz', '', 'c9'); $db->query("SET NAMES utf8");
  $sql="insert into comic (id, nombre, autor, fecha_salida, estado, descripcion, portada, portada_nombre) values ( null, '$nombre', '$autor', CURDATE(), '$estado' , '$descripcion', '$nportada', '$nportada' )";
  
  
  if($db->query($sql))
  {
    $last_id = $db->insert_id;
    move_uploaded_file($nombre_tmp,'/home/ubuntu/workspace/web/img/portada/'.$nportada.'.jpg');
    $sql="insert into comic_tiene_categoria (idcomic, idcategoria) values ($last_id, $categoria)";
    $db->query($sql);
    $sql="insert into usuario_vota_comic (idusuario, idcomic, voto) values ($idu, $last_id, null  )";
    $db->query($sql);
    header('Location: /web/correcto');
  }
  else{
        header('Location: /web/error');
  }

    }
    else{
        header('Location: /web/error');
    }
  }
  else{
      header('Location: /web/error');
  }
  
  ?>