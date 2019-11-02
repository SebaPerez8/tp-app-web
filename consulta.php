<?php
    include("conectar.php");
?>

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
            $barrio = $_POST['barrio'];
            $tipo= $_POST['tipo'];
            $situacion= $_POST['situacion'];
            $sql= "";
            $sql .= "SELECT I.domicilio, B.nombre, P.nombre, P.telefono, I.tipo, I.situacion, I.importe";
            $sql .= "FROM inmuebles I";
            $sql .= "INNER JOIN barrios B ON I.barrio = B.barrio ";
            $sql .= "INNER JOIN propietarios P ON I.propietario = P.propietario ";
            

         

            mysqli_close($conn);
        ?>

       
    </table>
    <a href="index.php">Regresar</a>  




</body>
</html>