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


                // echo de las 2 formas , pdo y msqli , es irrelevante , la utilidad es la misma
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
        <input type="submit" value="Enviar a DB" name="Submit" /><br>
        <input type="submit" value="Update Register" name="Update" /><br>
        <input type="submit" value="Erase Reñgister" name="Erase" />
        </form>
        <br>
        <hr>
        
        

    </div>
        <?php
       /*  $sql = 'SELECT publisher_id, name 
		FROM publishers';

         $statement = $pdo->query($sql);

        // get all publishers
        $publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($publishers) {
            // show the publishers
            foreach ($publishers as $publisher) {
                echo $publisher['name'] . '<br>';
            }
        }
         */
        
        ?>
        <?php 
        require 'pdoconfig.php';
        //$Connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
         $Connection = new mysqli("$host","$username","$password","$dbname");

        

        if (isset($_POST['Submit'])){
    
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
        
             ?>
           
         

        

</div>
    
</body>
</html>