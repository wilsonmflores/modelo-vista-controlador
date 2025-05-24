<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <title>libros</title>
</head>
<body>
    <h1>libros de finanzas</h1>
    <ul><?php
    foreach($datos as $valor){
        print"<li>". $valor["autor"]. ", ". $valor["editorial"]. ", <strong>'". $valor["titulo"]. "'<strong><li>";
    }

    ?>
    </ul>
</body>
</html>
