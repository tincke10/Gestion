<?php
// Iniciar sesión
// session_start();

// Asegurarse de que las variables de sesión existen y contienen los valores correctos
if(isset($_SESSION['afiliado']) && isset($_SESSION['nrodocumento']) && isset($_SESSION['descloca'])){
    // Crear recurso de imagen a partir de un archivo de imagen existente
    $im = imagecreatefrompng('img/completo.png');

    // Establecer color de texto
    $color = imagecolorallocate($im, 0, 0, 0);

    // Agregar texto con variables de sesión a la imagen
    imagettftext($im, 45, 0, 200, 800, $color, 'fonts/roboto-Medium.ttf', ''.$_SESSION['afiliado'].'    '.$_SESSION['nrodocumento'].'     '.$_SESSION['descloca'].'');
    // imagettftext($im, 40, 50, 60, $color,'D.N.I: ' . $_SESSION['nrodocumento']);
    // imagettftext($im, 40, 50, 40, $color,'Localidad: ' . $_SESSION['descloca']);

    // Guardar la imagen modificada
    imagepng($im, 'img/credencial.png');

    // Establecer cabeceras para descargar la imagen
    header('Content-Type: image/png');
    header('Content-Disposition: attachment; filename="Credencial.png"');

    // Leer y enviar el archivo de imagen al navegador
    readfile('img/credencial.png');

    // Liberar recurso de imagen
    imagedestroy($im);
}else{
    echo "Variables de sesion no disponibles o con valores incorrectos";
}

// Destruir la sesión
// session_destroy();
?>