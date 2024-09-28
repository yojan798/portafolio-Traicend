<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolecta los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Formatea el contenido para el archivo
    $contenido = "Nombre: $name\nCorreo Electrónico: $email\nMensaje: $message\n\n";

    // Ruta del archivo donde se guardarán los datos
    $ruta_archivo = 'datos_formulario.txt';

    // Abre el archivo en modo de anexar (append) y escribe los datos
    $archivo = fopen($ruta_archivo, 'a');
    if ($archivo) {
        fwrite($archivo, $contenido);
        fclose($archivo);
        echo 'Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.';
    } else {
        echo 'No se pudo guardar tu mensaje. Por favor, inténtalo de nuevo.';
    }
} else {
    echo 'Método de solicitud no válido.';
}
?>
