<html>
    <body style=" margin: 25px 50px 75px 100px; background-color:Whitesmoke;">

        <h2>Resumen de Contenidos</h2>
        <p>Resumen de contenidos vistos </p>

        <h3>Subida de Repositorio  GIt</h3>
        <p>git init<p>
        <p>git add .</p>
        <p>git commit -m "first commit"</p>
        <p>git remote add origin https://github.com/NOMBRE_USUARIO/NOMBRE_PROYECTO.git</p>
        <p>git push -u origin master</p>


        <h3 style="background-color: yellow;">Variables</h3>
        <p>Las variables en PHP <b>No necesitan ser definidads Previamente</b></p>
        <p>Las variables superglobales son :</p>

        <ul>
            <li>$_COOKIE</li>
            <li>$_GET</li>
            <li>$_POST</li>
            <li>$GLOBALS</li>
            <li>$_SESSION</li>
        </ul>

        <h3 style="background-color: yellow;">Strings (Most important data)</h3>

        <p>Las cadenas pueden ser tratadas de dos maneras:</p>
        <ul>
            <li>Mediante <b>" "</b>>>Reproduce el contenido y ejecuta variables</li>
            <li>Mediante <b>' '</b>>>Reproduce el contenido como simple texto plano </li>
        </ul>

        <p>Para concatenar strings emplearemos "."</p>
        <p>Ejemplo:</p>
        <p style="border: 2px solid orange; width: 70vh;">
        $concatenacion = "Este texto esta ";<br> 
        $concatenacion2 = "Concatenado";<br> 
        echo $concatenacion . $concatenacion2;</p>

        <?php 
            $concatenacion = "Este texto esta ";
            $concatenacion2 = "Concatenado"; 
                
            echo $concatenacion . $concatenacion2;

            ?>

        <h3 style="background-color:yellow;">Arrays</h3>

        <p>Hay 3 tipos de arrays:</p>
        <ul>
            <li>
                <b>Array Indexado</b>
                <p style="border: 2px solid orange; width: 70vh;">
                    $ArrayData = (valentin , Gabriel , Juan , Mercedes )
                </p>
            </li>
            <li>
                <b>Array Asociativo</b>
                <p style="border: 2px solid orange; width: 70vh;">
                $ArrayData = ("AlturaElm" => 2.10 , ""NombreElm" => "Valentín") 
                </p>
            </li>
            <li>
                <b>Multidimensionales</b>
                <p style="border: 2px solid orange; width: 70vh;"> 
                    $ArrayData = ( 0 => array("Pedro","Juan"), 1 => array( 7 , 28));
                </p>
            </li>

        </ul>


        <h3 style="background-color: yellow;">Funciones:</h3>

        <p>Podemos destacar dos peculiaridades destacadas : </p>
        <p><b><i>Pasar variable por valor</i></b>: Modifica el valor de la variable mediante : <b>function ($variable) </b></p>
        <p><b><i>Pasar por referencia</i></b>:No modifica el valor , es tal que : <b>function (&$variable)</b></p>

        

        <h3 style="background-color: red; color:white;">LAS PRACTICAS :</h3>

        <p  ><b><a href="./AGENDA/Agenda.php" style="color: purple;">AGENDA_CONTACTOS</a></b></p>
        <p><b><a href="./BURBUJA/" style="color: purple;">BURBUJA_ALG</a></b></p>
        <p><b><a href="./SESSIONS/" style="color: purple;">SESSIONS</a></b></p>
        <p><b><a href="./SELECCION/" style="color: purple;">SELECCION_DIRECTA</a></b></p>
        <p><b><a href="./SUBIDA/" style="color: purple;">SUBIDA_Arx</a></b></p>
        <p><b><a href="./LARAVEL/" style="color: purple;">LARAVEL</a></b></p>
    </body>
</html>