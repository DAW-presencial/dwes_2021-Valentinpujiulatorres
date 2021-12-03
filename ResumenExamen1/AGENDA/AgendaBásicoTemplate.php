<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php session_start(); ?>

<?php 
if (isset($_POST['submit'])){
    
    echo "Nombre : " . $_POST['firstname'] . " \n <br>";
    echo "Apellido : " . $_POST['lastname'] ;
}
?>
  

<form  method="post">
   <p>First name: <input type="text" name="firstname" /></p>
   <p>Last name: <input type="text" name="lastname" /></p>
   <input type="submit" name="submit" value="Submit" />
</form>



    
</body>
</html>