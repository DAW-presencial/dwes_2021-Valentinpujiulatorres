

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2>Printear Clase Autocargada mediante métodos:</h2>
<?php
function Costurero($Puppet) {
  include $Puppet. '.php';
}

spl_autoload_register('Costurero');

$RanaGustavo = new Puppet('Verde', '150g', 'ThePuppetsShow', 'Kermit The Frog');
$RanaGustavo->PrintEngine();
?>
  
</body>
</html>


