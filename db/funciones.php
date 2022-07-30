<?php

require "db.php";

function categorias($conn)
{

    $stmt = $conn->prepare("SELECT * FROM sys_categorias");
    $stmt->execute();
    $categorias = $stmt->fetchAll();
    return $categorias;
}

function categorias_panel($conn,$id_categoria)
{
    $id = $id_categoria;
    $stmt = $conn->prepare("SELECT * FROM sys_categorias WHERE idSys_Categorias = $id");
    $stmt->execute();
    $categorias_panel = $stmt->fetchAll();
    return $categorias_panel;
}


function cursos($conn)
{
    $stmt = $conn->prepare("SELECT * FROM sys_cursos");
    $stmt->execute();
    $cursos = $stmt->fetchAll();
    return $cursos;
}


//conteos 

function Conteo_categorias($conn)
{

    $stmt = $conn->prepare("SELECT * FROM sys_categorias");
    $stmt->execute();
    $conteo = $stmt->rowCount();
    return $conteo;
}

function Conteo_cursos($conn,$id_categoria)
{
    $id = $id_categoria;
    $stmt = $conn->prepare("SELECT * FROM sys_cursos WHERE idSys_Categorias = $id");
    $stmt->execute();
    $conteo_cursos = $stmt->rowCount();
    return $conteo_cursos;
}

function Conteo_modulos($conn,$id_categoria)
{
    $id = $id_categoria;
    $stmt = $conn->prepare("SELECT * FROM sys_modulos WHERE Sys_idcategorias = $id");
    $stmt->execute();
    $conteo_modulos = $stmt->rowCount();
    return $conteo_modulos;
}

function Conteo_secciones($conn,$id_categoria)
{
    $id = $id_categoria;
    $stmt = $conn->prepare("SELECT * FROM sys_secciones WHERE idSys_Categorias = $id");
    $stmt->execute();
    $conteo_secciones = $stmt->rowCount();
    return $conteo_secciones;
}