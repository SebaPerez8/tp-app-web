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
           
            echo "<h2>" . $row['nombre'] . "</h2>";     
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
            $venta= $_REQUEST['venta'];
            $alquiler= $_REQUEST['alquiler'];
            
            $sql= "SELECT I.domicilio, B.nombre AS barrio, P.nombre AS propietario, P.telefono, I.tipo, I.situacion, I.importe FROM inmuebles I 
                    INNER JOIN barrios B ON I.barrio=B.barrio 
                    INNER JOIN propietarios P ON I.propietario=P.propietario";
            
                if($venta == true && $alquiler == false){
                    $sql.= " WHERE I.barrio='$barrio' AND I.tipo ='$tipo' AND I.situacion='$venta' ";
                }elseif($venta == false && $alquiler == true){
                    $sql.= " WHERE I.barrio='$barrio' AND I.tipo ='$tipo' AND I.situacion='$alquiler' ";
                }elseif($venta == true && $alquiler == true) {
                    $sql.= " WHERE I.barrio='$barrio' AND I.tipo ='$tipo' ";
                }
            
            
            
            $result = mysqli_query($conn, $sql);
            
            while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['domicilio'] . "</td>";
                    echo "<td>" . $row['barrio'] . "</td>";
                    echo "<td>" . $row['propietario'] . "</td>";
                    echo "<td>" . $row['telefono'] . "</td>";
                    if ($row['tipo'] == "C") {
                        echo "<td>" . $row['tipo'] = "Casa"  . "</td>";
                    }elseif ($row['tipo'] == "D"){
                        echo "<td>" . $row['tipo'] = "Departamento"  . "</td>";
                    }else {
                        echo "<td>" . $row['tipo'] = "Local"  . "</td>";
                    }
                    if ($row['situacion'] == "V") {
                        echo "<td>" . $row['situacion'] = "Venta"  . "</td>";
                    }else{
                        echo "<td>" . $row['situacion'] = "Alquiler"  . "</td>";
                    }
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