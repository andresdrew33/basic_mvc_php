<?php
    function listar(){
        // INCLUYE EL MODELO NECESARIO
        require "models/libros_model.php";
        // PIDE EL LISTADO DE LIBROS
        $libros = getLibros();
        // PASA A LA VISTA LA INFORMACIÓN NECESARIA
        include "views/libros_listar.php";
        
    }

    function ver(){
        if (!isset($_GET["cod_libro"])){
            die ("No se ha especificado un código de libro");
        }
        $cod_libro = $_GET['cod_libro'];
        require "models/libros_model.php";
        $libro = getLibro($cod_libro);
        if ($libro===null){
            die("Identificador erróneo");
        }
        include "views/libros_ver.php";
    }
?>