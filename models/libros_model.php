<?php
    function getConnection(){
        $user = "root";
        $password = "";
        $url = "localhost";
        $database = "libreria";
        return new PDO("mysql:host=$url;dbname=$database",$user,$password);
    }
    

   function getLibros(){
    $connection = getConnection() or die("No se ha podido establecer la conexión");
    $result = $connection->query("SELECT cod_libro,nombre,precio FROM libros") or die("No se ha podido hacer la consulta");
    $libros = array();
    while ($libro = $result->fetch()){
        $libros[]= $libro;
    }
    return $libros;
   }

   function getLibro($id){
    $connection = getConnection() or die("No se ha podido establecer la conexión");
    $query = ("SELECT * FROM libros where cod_libro =?");
    $statement = $connection->prepare($query);
    $statement->execute([($id)]);
    $libro = $statement->fetch();
    return $libro;
   }
?>