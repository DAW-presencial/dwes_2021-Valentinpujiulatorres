<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        p{
            color: green;
        }
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
        <input type="submit" value="Enviar a DB" name="Submit" /><br>
        <input type="submit" value="Update Register" name="Update" /><br>
        <input type="submit" value="Erase Reñgister" name="Erase" />
        </form>
        <br>
        <br>
        <p>Crear Contacto ( Nombre , Apellido , Número)</p>
        <p>Update by Nombre y Surname sobre campo Telefono</p>
        <p>Delete Contact según Nombre y Apellido</p>
        <hr>
        
        

    </div>
        <?php
        require'pdoconfig.php';
        try {
            $conn = new PDO("pgsql:host=$host;dbname=$dbname;user=$username;password=$password");
            
            //$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            echo "<p>Connected to $dbname at $host successfully.<p>";
        
        } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
        
       
       

       if (isset($_POST['Submit'])){

        //INSERT::
        $name = $_POST['Name'];
        $Surname = $_POST['Surname'];
        $Telephone = $_POST['Tel'];
        $consulta =
            "INSERT INTO contactlist VALUES ('$name','$Surname','$Telephone')";

            try{

        $affectedRows = $conn->exec($consulta);

        echo "Filas Modificadas: $affectedRows <br>";
         //SELECT::
        $result = $conn->prepare('SELECT * FROM contactlist');
        $result->execute();
         
         while ($Elm = $result-> fetch()) {
           echo 'Contacto: ' . $Elm['Name'] . $Elm['Surname'] . $Elm['Phone'] . '<br />';
        }
        $conn=null; 
            }catch(PDOException $pdoe){
                echo($pdoe->getMessage());
            }
            

        
       } else if (isset($_POST['Update'])){
       
       
        $name = $_POST['Name'];
        $Surname = $_POST['Surname'];
        $Telephone = $_POST['Tel'];
        $consulta =
            "UPDATE `contactlist` SET `Phone`='$Telephone' WHERE `Name`='$name' AND `Surname`='$Surname'";

            try{
        $affectedRows = $conn->exec($consulta);

        echo "Filas Modificadas: $affectedRows <br>";
         //SELECT::
         $result = $conn->prepare('SELECT * FROM contactlist');
         $result->execute();
          
          while ($Elm = $result-> fetch()) {
            echo 'Contacto: ' . $Elm['Name'] . $Elm['Surname'] . $Elm['Phone'] . '<br />';
         }
         $conn=null; 
             }catch(PDOException $pdoe){
                 echo($pdoe->getMessage());
             }



       }else if (isset($_POST['Erase'])){

            $name = $_POST['Name'];
            $Surname = $_POST['Surname'];
            $Telephone = $_POST['Tel'];
            $consulta =
                "DELETE FROM contactlist WHERE 'Name' = 'Valentin' AND 'Surname' = 'Pujiula'";

                try{
            $affectedRows = $conn->exec($consulta);

            echo "Filas Modificadas: $affectedRows <br>";
            //SELECT::
            $result = $conn->prepare('SELECT * FROM contactlist');
            $result->execute();
             
             while ($Elm = $result-> fetch()) {
               echo 'Contacto: ' . $Elm['Name'] . $Elm['Surname'] . $Elm['Phone'] . '<br />';
            }
            $conn=null; 
                }catch(PDOException $pdoe){
                    echo($pdoe->getMessage());
                }
       }
        ?>
        <?php 
        /* require 'pdoconfig.php';
        //$Connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
         $Connection = new mysqli("$host","$username","$password","$dbname");
 */
        

      /*   if (isset($_POST['Submit'])){
    
            $Name = $_POST['Name'];
            $Surname = $_POST['Surname'];
            $Telephone = $_POST['Tel'];
            $UpdateData = "UPDATE contactlist  SET Surname = '$Surname', Phone = '$Telephone' WHERE Name = '$Name';";
            $RemoveData = "";
            $InsertData = "INSERT INTO contactlist (Name,Surname,Phone) VALUES ('$Name', '$Surname', '$Telephone')";
            if ( $Connection -> query($InsertData) === TRUE && $Name !== "") {
                echo "<br><br><p style=\"color: green;\">New record created successfully<p>";
            }
               
               else{
                echo "Error: "  . "<br>" ;
              }
              $ShowMe =  $Connection -> query("SELECT * FROM contactlist");
            
              $ShowMe->data_seek(0);
              while ($fila = $ShowMe->fetch_assoc()) {
                  echo " CONTACTO [  " . "Name: " . $fila['Name'] . ",  Surname: " .  $fila['Surname'] . ",  Phone: " . $fila['Phone'] . "]" ."<br>" ;
            
                };
        }else if (isset($_POST['Update'])){
            $Name = $_POST['Name'];
            $Surname = $_POST['Surname'];
            $Telephone = $_POST['Tel'];
            $UpdateData = "UPDATE contactlist  SET Surname = '$Surname', Phone = '$Telephone' WHERE Name = '$Name';";
            if ( $Connection -> query($UpdateData) === TRUE && $Name !== "") {
                echo "<br><br><p style=\"color: green;\">New Update successfully<p>";
                $ShowMe =  $Connection -> query("SELECT * FROM contactlist");
            
                $ShowMe->data_seek(0);
                while ($fila = $ShowMe->fetch_assoc()) {
                    echo " CONTACTO [  " . "Name: " . $fila['Name'] . ",  Surname: " .  $fila['Surname'] . ",  Phone: " . $fila['Phone'] . "]" ."<br>" ;
              
                  };
            }

        }else if (isset($_POST['Erase'])){
            $Name = $_POST['Name'];
            $EraseData = "DELETE FROM contactlist WHERE Name = '$Name';";
            if ( $Connection -> query($EraseData) === TRUE && $Name !== "") {
                echo "<br><br><p style=\"color: green;\">New erase succesfully</p>";

            }
            $ShowMe =  $Connection -> query("SELECT * FROM contactlist");
            
            $ShowMe->data_seek(0);
            while ($fila = $ShowMe->fetch_assoc()) {
                echo " CONTACTO [  " . "Name: " . $fila['Name'] . ",  Surname: " .  $fila['Surname'] . ",  Phone: " . $fila['Phone'] . "]" ."<br>" ;
          
              };

        }
         */
             ?>
           
         

        

</div>
    
</body>
</html>