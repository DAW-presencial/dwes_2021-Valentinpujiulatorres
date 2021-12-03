
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bubble Arrays</title>
  <style>
    body{
      margin: 13%;
    }
    .answer{
      box-shadow: black;
    }
  </style>
</head>
<body>

<h1>Dependiendo de Min / Max value - Podemos: </h1>
<br>
<h3>Ordenar de Menor a Mayor un Array:</h3>
<div class="answer">
<?php
$Array1= [3, 1, 20, 88, 32];
//////////////////////////////////
/*
-Paso por referencia =  &$variable
-Paso por valor = $variable
-https://platzi.com/tutoriales/1775-poo-python/9046-ordenamiento-burbuja/?utm_source=google&utm_medium=paid&utm_campaign=14603491644&utm_adgroup=&utm_content=&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7yldeT2nWjRs71S6qJc6dr712UeNr0whX7ETyhtqhGGdayQvmu6HT-8aAjbkEALw_wcB&gclsrc=aw.ds
*/
/////////////////////////////////
function Burbuja_menor_mayor(array &$Array1)
{
  for ($i = 0; $i < count($Array1); $i++) {
    for ($j = 0; $j < count($Array1); $j++) {
      if ($Array1[$i] > $Array1[$j]) {
        $MinValue = $Array1[$i];
        $Array1[$i] = $Array1[$j];
        $Array1[$j] = $MinValue;
      }
    }
  }
  return $Array1;
}
print_r($Array1);
echo '<br>';
?>

</div>
<br>
<h3>Ordenar de Mayor a menor un Array:</h3>
<div class="answer">
<?php
$Array2 = [42, 33, 3, 98, 22];
function Burbuja_mayor_menor(array &$Array2)
{
  for ($i = 0; $i < count($Array2); $i++) {
    for ($j = 0; $j < count($Array2); $j++) {
      if ($Array2[$i] < $Array2[$j]) {
        $Maxvalue = $Array2[$j];
        $Array2[$j] = $Array2[$i];
        $Array2[$i] = $Maxvalue;
      }
    }
  }
  return $Array2;
}

Burbuja_menor_mayor($Array1);
Burbuja_mayor_menor($Array2);


print_r($Array2);
?>
</div>



  
</body>
</html>



