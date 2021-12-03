

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border: 2px solid red;
        }
    </style>
</head>
<body>
<?php 




if (isset($_POST['Submit'])){
    
    echo "Nombre : " . $_POST['Name'] . " \n <br>";
    echo "Apellidos : " . $_POST['Surname'] . "  \n <br>" ;
    echo "Fecha : " . $_POST['Date'] . "  \n <br> ";
 }


$dir_subida = 'ARX_DB/';
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);
$fichero_subido2 = $dir_subida . basename($_FILES['fichero_usuario2']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero 1 es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros / Error FileUpload!\n";
}
echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario2']['tmp_name'], $fichero_subido2)) {
    echo "El fichero 2 es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo "<div>";

echo 'Nombre Fichero 1 : ' . $_FILES['fichero_usuario']['name'] . " \n <br>";
echo 'Tipo de Archivo : ' . $_FILES['fichero_usuario']['type'] . " \n <br>" ;
echo"</div><br>";

echo "<div >";
echo 'Nombre Fichero 2 : ' . $_FILES['fichero_usuario2']['name'] . " \n <br>" ;
echo 'Tipo de Archivo : ' . $_FILES['fichero_usuario2']['type'] . " \n <br><br>" ;
echo"</div><br>";

echo 'Más información de depuración:';
print_r($_FILES);
?>
</body>
</html>
