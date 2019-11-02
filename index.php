<?php
    include("conectar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inmobiliaria</title>
</head>
<body>
    <form action="consulta.php" method="post">
        <h3>Barrios</h3> 
            <select name= "barrio">
                
                <?php
                    $sql = "SELECT * FROM barrios";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=" . $row['barrio'] . ">" . $row['nombre'] . "</option>";
                    }
                    mysqli_close($conn);
                ?>
        
        
            </select> <br> <br>
        <h3>Tipo</h3> 
            <input type="radio" name="tipo" checked value="C"> Casa
            <input type="radio" name="tipo"  value="D"> Departamento
            <input type="radio" name="tipo" value="L"> Local
            <br> <br>
        <h3>Situacion</h3> 
            <input type="checkbox" name="situacion" checked value="V"> Venta
            <input type="checkbox" name="situacion" value="A"> Alquiler 
            <br> <br>
            <input type="submit" value="CONSULTAR">
    </form>  
</body>
</html>