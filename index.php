<?php
    // DEFINO LOS VALORES POR DEFECTO
    define ("CONTROLLERS_FOLDERS","controllers/");
    define ("DEFAULT_CONTROLLER","libros");
    define ("DEFAULT_ACTION","listar");
    // OBTENGO EL CONTROLADOR Y LA ACCIÓN
    $controller = isset($_GET["controller"]) ? $_GET["controller"]: DEFAULT_CONTROLLER;
    $action = isset($_GET["action"]) ? $_GET["action"]: DEFAULT_ACTION;
    
    //CONSTRUYO EL PATH DEL CONTROLADOR, Y SI ES UN ARCHIVO QUE EXISTE LO REQUERIMOS 
    $controller = CONTROLLERS_FOLDERS.$controller."_controller.php";
    try
    {
        if (is_file($controller))
            require_once($controller);   
        else
            throw new Exception("No se ha encontrado el controlador");
        if (is_callable($action)){
            $action();
        }
        else {
            throw new Exception("No existe la acción");
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>