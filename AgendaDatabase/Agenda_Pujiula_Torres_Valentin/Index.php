<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            margin-left: 15%;
            margin-right: 7%;
        
        }
        #databaseConn p{
            color: green;
        }
        #Formulario {
            border: 2px;
            border-color: black;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contactos</title>
</head>
<body>
    <h1>Agenda de Contactos PHP</h1>
    <p>Autor: Valentín Pujiula Torres </p>
    
    <div id="databaseConn">
        <?php
            require_once 'pdoconfig.php';
 
            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                echo "<p>Connected to $dbname at $host successfully.<p>";
            
            } catch (PDOException $pe) {
            die("Could not connect to the database $dbname :" . $pe->getMessage());
        }
        ?>
    </div> 
    <div id="Formulario" >
        <form enctype="multipart/form-data"  method="post">
        <label for="Name">Introduce tu Nombre:</label>
        <input type="text" name="Name"><br>
        <label for="Surname">Introduce tus apellidos:</label>
        <input type="text" name="Surname"><br>
        <label for="Tel">Introduce tu Número de teléfono</label>
        <input type="number" name="Tel"><br>
        <input type="submit" value="Enviar a DB" name="Submit" />
        </form>
        <br>
        <hr>
        

    </div>

        <?php 
        require 'pdoconfig.php';
        $Connection = new mysqli("$host","$username","$password","$dbname");

        if (isset($_POST['Submit'])){
    
            $Name = $_POST['Name'];
            $Surname = $_POST['Surname'];
            $Telephone = $_POST['Tel'];
            $InsertData = "INSERT INTO contactlist (Name,Surname,Phone) VALUES ('$Name', '$Surname', '$Telephone')";
            if ( $Connection -> query($InsertData) === TRUE && $Name !== "") {
                echo "<br><br><p style=\"color: green;\">New record created successfully<p>";
              } else {
                echo "Error: "  . "<br>" . $conn->error;
              }
              $ShowMe =  $Connection -> query("SELECT * FROM contactlist");
            
              $ShowMe->data_seek(0);
              while ($fila = $ShowMe->fetch_assoc()) {
                  echo " CONTACTO [  " . "Name: " . $fila['Name'] . ",  Surname: " .  $fila['Surname'] . ",  Phone: " . $fila['Phone'] . "]" ."<br>" ;
            
                };
        }
             ?>
           
         

        

</div>
    
</body>
</html>