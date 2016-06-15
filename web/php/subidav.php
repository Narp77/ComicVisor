<?php
include("db.php");

$last_id=null;
$nombrecomic=null;
$numerocapitulo=null;

if(isset($_FILES['imagenes']) ){
 
 /*
  $nombre = $_FILES['imagenes']['name'];
  $nombre_tmp = $_FILES['imagenes']['tmp_name'];
  $tipo = $_FILES['imagenes']['type'];
  $tamano = $_FILES['imagenes']['size'];
 
  $ext_permitidas = array('jpg','jpeg','gif','png');
  $partes_nombre = explode('.', $nombre);
  $extension = end( $partes_nombre );
  $ext_correcta = in_array($extension, $ext_permitidas);
 
  $tipo_correcto = preg_match('/^image\/(pjpeg|jpeg|gif|png)$/', $tipo);
  
  if( $ext_correcta && $tipo_correcto ){
    if( $_FILES['imagenes']['error'] == 0 ){
      
      move_uploaded_file($nombre_tmp,'/home/ubuntu/workspace/web/'.$nombre);
    
    }
  }
  */
  
  $idu = $_REQUEST["id"];
  $idcocmic = $_REQUEST["comic"];
  $idcapitulo = $_REQUEST["capitulo"];
  $paginas = $_REQUEST["npaginas"];
  
  $db = obtenerConexion();  $db->query("SET NAMES utf8");
  $sql="insert into version (id, idcapitulo, idusuario, numero_pag) values ( null, $idcapitulo, $idu, $paginas)";
  
  echo $sql;
  
  if($db->query($sql))
  {
	 $last_id = $db->insert_id;
  
  
  $sql="insert into usuario_sube_version (idusuario, idversion, idcapitulo, fecha_subida) values ( $idu, $last_id, $idcapitulo, CURDATE())";
  $db->query($sql);
  
  $sql="select portada_nombre from comic where id= $idcocmic";
  $resultado=$db->query($sql);
  
  if ($resultado->num_rows > 0) {
    // output data of each row
    while($row = $resultado->fetch_assoc()) {
      $nombrecomic=$row["portada_nombre"];
    }
  
  
  $sql="select numero from capitulo where id= $idcapitulo";
  $resultado=$db->query($sql);

    // output data of each row
    while($row = $resultado->fetch_assoc()) {
      $numerocapitulo=$row["numero"];
    }
  
  
  if($_FILES["imagenes"]["name"]) {
	$filename = $_FILES["imagenes"]["name"];
	$source = $_FILES["imagenes"]["tmp_name"];
	$type = $_FILES["imagenes"]["type"];
	
	$name = explode(".", $filename);
	$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
	foreach($accepted_types as $mime_type) {
		if($mime_type == $type) {
			$okay = true;
			break;
		} 
	}
	
	$continue = strtolower($name[1]) == 'zip' ? true : false;
	if(!$continue) {
		$message = "The file you are trying to upload is not a .zip file. Please try again.";
	}

	$target_path = "/home/ubuntu/workspace/web/".$filename;  // Ruta a cambiar /home/ubuntu/workspace/web/
	echo '<br/>'.$target_path.'<br/>';
	echo '<br/>'.$source.'<br/>';
	if(move_uploaded_file($source, $target_path)) {
		$zip = new ZipArchive();
		$x = $zip->open($target_path);
		if ($x === true) {
			$zip->extractTo("/home/ubuntu/workspace/web/img/comic/$nombrecomic/$numerocapitulo/$last_id/"); // Ruta a cambiar /home/ubuntu/workspace/web/
			$zip->close();
	
			unlink($target_path);
		}
		$message = "Your .zip file was uploaded and unpacked.";
	} else {	
		$message = "There was a problem with the upload. Please try again.";
		header('Location: /web/error');
	}
	echo $message;
}
}
}
header('Location: /web/correcto');
}
else{
header('Location: /web/error');
}

?>