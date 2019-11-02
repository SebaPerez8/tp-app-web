<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado consulta</title>
</head>
<body>
  
    
    <table style="width:100%" border = 1>
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
            $barrio= $_POST['barrio'];
            $tipo= $_POST['tipo'];
            $situacion= $_POST['situacion'];
            $sql= "";
            $sql= "SELECT I.domicilio, B.nombre AS barrio, P.nombre AS propietario, P.telefono, I.tipo, I.situacion, I.importe FROM inmuebles I 
                INNER JOIN barrios B ON I.barrio=B.barrio 
                INNER JOIN propietarios P ON I.propietario=P.propietario";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['domicilio'] . "</td>";
                echo "<td>" . $row['barrio'] . "</td>";
                echo "<td>" . $row['propietario'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "<td>" . $row['tipo'] . "</td>";
                echo "<td>" . $row['situacion'] . "</td>";
                echo "<td>$ " . $row['importe'] . "</td>";
                echo "</tr>";
            }

            mysqli_close($conn);
        ?>

       
    </table>
    <a href="index.php">Regresar</a>  




</body>
</html>