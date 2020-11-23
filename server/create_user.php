<?php

    require('conexion.php');

    $con = new ConectorBD();
    
    if ($con->initConexion('agenda2_db')=='OK') {
      $conexion = $con->getConexion();

      $insert = $conexion->prepare('INSERT INTO usuarios (email, nombre, password, fecha_nacimiento) VALUES (?,?,?,?)');
      $insert->bind_param("ssss", $mail, $nombre_completo, $passw, $fecha_nacimiento);

      $mail = "chapa@gmail.com";
      $nombre_completo = "Rafael Chaparro";
      $passw = password_hash("opio", PASSWORD_DEFAULT);
      $fecha_nacimiento = "2020-01-15";

      $insert->execute();

      $mail = "popol@hotmail.com";
      $nombre_completo = "Quiche Vuh";
      $passw = password_hash("america", PASSWORD_DEFAULT);
      $fecha_nacimiento = "1963-10-20";

      $insert->execute();

      $mail = "lorca@gmail.com";
      $nombre_completo = "Lina Lorca";
      $passw = password_hash("ll", PASSWORD_DEFAULT);
      $fecha_nacimiento = "2000-08-11";

      $insert->execute();

      echo "Se insertaron los registros exitosamente";

      $con->cerrarConexion();
    }else {
      echo "Se presento un error en la conexion";
    }
    
?>
