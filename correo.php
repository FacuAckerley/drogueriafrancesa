<?php

 $destino = "sieg.servicio@gmail.com";

    $nombre = $_POST['nombre'];

    $email = $_POST['email'];

    $numero = $_POST['numero'];

    $asunto = $_POST['asunto'];

    $mensaje = $_POST['mensaje'];

    $contenido = "Nombre: " . $nombre . "\nEmail " . $email . "\nNúmero: " . $numero . "\nAsunto: " . $asunto . "\nMensaje" . $mensaje;

    mail($destino, "Contacto", $contenido);
       
        echo "<script> setTimeout(\"location.href='https://facuackerley.github.io/drogueriafrancesa/Contactox.html'\",1000)</script>";
//