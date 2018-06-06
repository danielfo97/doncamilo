<?php
    destino ="ivanchosdvsf@gmail.com";
    nombre =" s_post"{"nombre"}; 
    apellido =" s_post"{"apellido"};
    correo =" s_post"{"correo"}; 
    mesanje =" s_post"{"mensaje"}; 
    contenido = "Nombre: " . nombre . "\napellido: " . apellido . "\correo: " . telefono . "\mensaje: " . mensaje;
    mail(destino, "nombre" , contenido)
    header("location:Gracias.html"); 
 ?>