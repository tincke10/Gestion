<?php
$conexion2=pg_connect("host='' user='' password='' dbname='' port=''")
or die("Could not connect to server;n".pg_last_error());
pg_set_client_encoding($conexion2, "UTF8");
?>