<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Examen 1 Evaluación Valentín Pujiula</title>
</head>
    <body>
    <form enctype="multipart/form-data" action="Engine.php" method="post">
    <label for="Name">Introduce tu Nombre:</label>
    <input type="text" name="Name"><br>
    <label for="Surname">Introduce tus apellidos:</label>
    <input type="text" name="Surname"><br>
    <label for="Date">Fecha:</label>
    <input type="date" name="Date"><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <label for="fichero_usuario">Enviar este fichero:</label> 
    <input name="fichero_usuario" type="file" /><br>
    <label for="fichero_usuario2">Enviar este fichero:</label> 
    <input name="fichero_usuario2" type="file" /><br>
    <input type="submit" value="Enviar fichero" name="Submit" />
</form>
        <?php

        ?>
    </body>
</html>