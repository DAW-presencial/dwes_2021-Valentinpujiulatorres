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


echo 'Más información de depuración:';
print_r($_FILES);

?>