<?php

require "db.php";

// insertar datos en la base de datos
//$id = $_POST['id'];
$nombre = $_POST['categoria'];
$imagen = $_POST['imagen'];

$sql = "INSERT INTO sys_categorias (idSys_Categorias, Sys_Categorias, Sys_categoriasLink) VALUES ('','$nombre', '$imagen')";
$conn->exec($sql);
