<?php
$conexion2=pg_connect("host=190.123.94.162 user=postgres password=postgres dbname=adminis port=5432")
or die("Could not connect to server;n".pg_last_error());
pg_set_client_encoding($conexion2, "UTF8");
?>