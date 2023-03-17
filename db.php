<?php
$conexion=pg_connect("host=190.123.94.162 user=postgres password=postgres dbname=sistema port=5432")
or die("Could not connect to server;n".pg_last_error());
pg_set_client_encoding($conexion, "UTF8");
?>