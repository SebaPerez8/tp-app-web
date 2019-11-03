<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>Resultado consulta</title>
</head>
<body>
  
    <?php
        include("conectar.php");
        $sql = "SELECT nombre FROM barrios WHERE barrio= " . $_POST['barrio'] . "";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
           
            echo "<h3>" . $row['nombre'] . "</h3>";     
        }
        mysqli_close($conn);
        
        
    ?>
    <table>
        <tr>
            <th>Domicilio</th>
            <th>Barrio</th>
            <th>Propietario</th>
            <th>Telefono</th>
            <th>Tipo</th>
            <th>Situacion</th>
            <th>Importe</th>
        </tr>
        <?php
            include("conectar.php");
            $barrio= $_REQUEST['barrio'];
            $tipo= $_REQUEST['tipo'];
            $situacion= $_REQUEST['situacion'];
            $sql= "SELECT I.domicilio, B.nombre AS barrio, P.nombre AS propietario, P.telefono, I.tipo, I.situacion, I.importe FROM inmuebles I 
                    INNER JOIN barrios B ON I.barrio=B.barrio 
                    INNER JOIN propietarios P ON I.propietario=P.propietario";
             
           
                $sql.= " WHERE I.barrio='$barrio' AND I.tipo ='$tipo' ";   
            
            
            

            
            

            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['domicilio'] . "</td>";
                    echo "<td>" . $row['barrio'] . "</td>";
                    echo "<td>" . $row['propietario'] . "</td>";
                    echo "<td>" . $row['telefono'] . "</td>";
                    echo "<td>" . $row['tipo'] . "</td>";
                    echo "<td>" . $row['situacion'] . "</td>";
                    echo "<td> $ " . $row['importe'] . "</td>";
                    echo "</tr>";
            }

            mysqli_close($conn);
        ?>

       
    </table>
    <br> <br>
    <a href="index.php">Regresar</a>  




</body>
</html>