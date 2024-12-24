<!DOCTYPE html>
<html>
<head>
    <title>Librería de prueba</title>
</head>
<body>
    <h1>Librería de prueba</h1>
    <p>Este es un ejemplo de una librería de prueba.</p>
    <table border="1">
        <tr>
            <th>Codigo de libro</th>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
        <?php
            foreach ($libros as $libro):?>
                <tr>
                    <td> <?php echo $libro['cod_libro']; ?></td>       
                    <td><a href="index.php?controller=libros&action=ver&cod_libro=<?php echo $libro['cod_libro'];?>"> 
                        <?php echo $libro['nombre']; ?></a></td>       
                    <td> <?php echo $libro['precio']; ?></td>       
                </tr>                
            <?php endforeach; ?>
    </table>
</body>
</html>