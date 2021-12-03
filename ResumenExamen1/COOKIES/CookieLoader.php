


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php
function VisionInclude($Cookie) {
  include $Cookie. '.php';
}
?>
<h2>Trata acerca del Comportamiento de Atributos:</h2>
<p>Nombre,Apellidos,Cuenta Bancária:</p>
<div>
<?php
spl_autoload_register('VisionInclude');

$DataTest = new Cookie('Valentin', 'Pujiula', 'BCX344544344');


echo 'Apellido inexistente: ' . $DataTest->Apellidos;
echo '<br>';
echo 'Cuenta Bancaria: ' .$DataTest->BankAccount;
echo '<br>';
echo '<br>';
$DataTest->BankAccount ='Puedes Modificarlo con un setter';
$DataTest->Apellidos = 'Puedes Modificarlo con un setter ';
echo 'Atributo Protegido  Apellidos : ' .$DataTest->Apellidos;
echo '<br>';
echo 'Atributo privado BankAccount : ' .$DataTest->BankAccount;
?>
</div>

  
</body>
</html>


