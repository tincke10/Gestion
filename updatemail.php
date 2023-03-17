
<?php
include 'adminis.php';
// session_start();
$dni = $_SESSION['socio'];

// Actualizar el correo electrónico en la base de datos
$email = $_POST['email'];
$sql = "UPDATE socios SET email = $1 WHERE nrodocumento = '$dni'";
$stmt = pg_prepare($conexion2, "updatemail", $sql);
$result = pg_execute($conexion2, "updatemail", array($email));

if (!$result) {
  echo "Error al actualizar el correo electrónico: " . pg_last_error($conexion2);
} else {
 header("Location: factura.php");
 echo "<script>alert('Correo electrónico actualizado correctamente');</script>";
}
// Cerrar la conexión a la base de datos
pg_close($conexion2);
?>

