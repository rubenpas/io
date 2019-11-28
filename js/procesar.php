<?php
    $destino= "rubpas27@gmail.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];


    $message = '';
	$message .= '<p>Hola, ha sido registrado un nuevo mensaje desde el formulario de contacto del sitio web, según el detalle siguiente:</p> ';
	$message .= '<p>Cliente: '.$nombre.'</p> ';
	$message .= '<p>Email: '.$correo.'</p> ';
    $message .= '<p>Mensaje: '.$mensaje.'</p> ';
    
    $header ="From:". "PersonalPage";

    mail($email,$subject,$message,$header)
?>