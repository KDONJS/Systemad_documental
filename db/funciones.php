<?php

require "db.php";

// mostrar en cabecera el nombre de la categoria

function mostrar_categoria($conn)
{
    $stmt = $conn->prepare("SELECT * FROM sys_cursos ORDER BY RAND() LIMIT 7");
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}


//lectura de datos de la base de datos


function categorias($conn)
{

    $stmt = $conn->prepare("SELECT * FROM sys_categorias");
    $stmt->execute();
    $categorias = $stmt->fetchAll();
    return $categorias;
}

function categorias_panel($conn, $id_categoria)
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

function modulos($conn,$id_curso)
{
    $stmt = $conn->prepare("SELECT * FROM sys_modulos WHERE idSys_Cursos = $id_curso");
    $stmt->execute();
    $modulos = $stmt->fetchAll();
    return $modulos;
}


//conteos 

function Conteo_categorias($conn)
{

    $stmt = $conn->prepare("SELECT * FROM sys_categorias");
    $stmt->execute();
    $conteo = $stmt->rowCount();
    return $conteo;
}

function Conteo_cursos($conn, $id_categoria)
{
    $id = $id_categoria;
    $stmt = $conn->prepare("SELECT * FROM sys_cursos WHERE idSys_Categorias = $id");
    $stmt->execute();
    $conteo_cursos = $stmt->rowCount();
    return $conteo_cursos;
}

function Conteo_modulos($conn, $id_categoria)
{
    $id = $id_categoria;
    $stmt = $conn->prepare("SELECT * FROM sys_modulos WHERE Sys_idcategorias = $id");
    $stmt->execute();
    $conteo_modulos = $stmt->rowCount();
    return $conteo_modulos;
}

function Conteo_secciones($conn, $id_categoria)
{
    $id = $id_categoria;
    $stmt = $conn->prepare("SELECT * FROM sys_secciones WHERE idSys_Categorias = $id");
    $stmt->execute();
    $conteo_secciones = $stmt->rowCount();
    return $conteo_secciones;
}


// selecion de documentos //

function pdf($conn)
{
    $stmt = $conn->prepare("SELECT * FROM sys_documentos");
    $stmt->execute();
    $pdf = $stmt->fetchAll();
    return $pdf;
}
