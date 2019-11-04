<?php
    include("conectar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>Inmobiliaria</title>
</head>
<body>
    <script> 
        function validateFunction() {
            var fo = document.formulario;
            if (!fo.venta.checked && !fo.alquiler.checked) {
                alert("Selecciona al menos una situación");
                return false;
            }
            return true;
            }
    </script>
   
    <form class="center" name="formulario" action="consulta.php" method="post" onsubmit="return validateFunction();">
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
            <input type="radio" name="tipo" value= "D"> Departamento
            <input type="radio" name="tipo" value= "L"> Local
            <br> <br>
        <h3>Situación</h3> 
            <input type="checkbox" name="venta" checked value="V"> Venta
            <input type="checkbox" name="alquiler" value="A"> Alquiler 
            <br> <br>
            <input class="button" type="submit" value="CONSULTAR">
    </form>  
</body>
</html>