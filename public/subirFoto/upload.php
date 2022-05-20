<?php
 
 
 $imagen= $_POST['foto'];
 $nombre = $_POST['nombre'];
 
 $path = "uploads/$nombre.png";
 
 file_put_contents($path,base64_decode($imagen));
 echo "Se actualizó la imagen correctamente";
 
?>