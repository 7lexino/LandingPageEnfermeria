<?php	

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $asunto = $nombre . " | Enfermería LandingPage";
    $fullMensaje = "
        Nombre: " . $nombre . "
        Correo: " . $correo . "
        Tel. / Cel. " . $telefono . "
        Mensaje: <br/> " . $mensaje . "
    ";

    if(mail("sistemas@juguel.com", $asunto, $fullMensaje) != false){
        echo 'true';
    }else{
        echo 'false';
    }

?>