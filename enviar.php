<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $producto = $_POST['producto'];
  $comentarios = $_POST['comentarios'];

  // Configura la dirección de correo electrónico donde recibirás los mensajes
  $destinatario = "contraluz.polarizado@gmail.com";

  // Configura el asunto del correo electrónico
  $asunto = "Nuevo mensaje WEB CONTRALUZ";

  // Construye el cuerpo del mensaje
  $cuerpoMensaje = "Nombre: $nombre\n";
  $cuerpoMensaje .= "Apellido: $apellido\n";
  $cuerpoMensaje .= "Teléfono: $telefono\n";
  $cuerpoMensaje .= "Correo electrónico: $correo\n";
  $cuerpoMensaje .= "Producto: $producto\n";
  $cuerpoMensaje .= "Comentarios: $comentarios\n";

  // Envía el correo electrónico
  if (mail($destinatario, $asunto, $cuerpoMensaje)) {
    echo "Gracias por contactarnos, $nombre. Pronto nos pondremos en contacto contigo.";
  } else {
    echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.";
  }
}
?>