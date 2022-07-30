<?php

require "db.php";

function categorias($conn)
{

    $stmt = $conn->prepare("SELECT * FROM sys_categorias");
    $stmt->execute();
    $categorias = $stmt->fetchAll();
    return $categorias;
}

function cursos($conn)
{
    $stmt = $conn->prepare("SELECT * FROM sys_cursos");
    $stmt->execute();
    $cursos = $stmt->fetchAll();
    return $cursos;
}

function Conteo_categorias($conn)
{

    $stmt = $conn->prepare("SELECT * FROM sys_categorias");
    $stmt->execute();
    $conteo = $stmt->rowCount();
    return $conteo;
}
