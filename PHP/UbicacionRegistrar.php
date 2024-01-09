<?php
    $db = mysqli_connect('localhost','root','','bodegayanin');
    $command =  mysqli_query($db, 'SELECT codigo,nombre, nrodocumento FROM tblpersona ORDER BY nombre');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Ubicacion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Registrar Cliente</title>
</head>
<body>
    <form action="./UbicacionRegistrarCon.php" method="post">
    <div class="contenedor-padre">
        <u><i><h2>Registrar Direccion</h2></i></u>
        <div class="input-group">
            <span class="input-group-text">Nombre - NroDocumento</span>
            <td>
                    <select name="ndoc">
                    <?php
                        while ($row = mysqli_fetch_array($command)) 
                        {
                    ?>
                        <option value="<?php echo $row['codigo']; ?>"><?php echo $row['nombre'],"-",$row['nrodocumento']; ?></option>                
                    <?php
                        }
                    ?>
                    </select>
            </td>
        </div>
        <div class="input-group">
            <span class="input-group-text">Direccion</span>
            <input type="text" name="direccion" class="form-control" placeholder="Jr. Real" required>
        </div>
        <div class="input-group">
            <span class="input-group-text">Lugar De Referencia</span>
            <input type="text" name="referencia" class="form-control" placeholder="Huancayo" required>
        </div>
        <div class="input-group">
            <span class="input-group-text">Numero De Casa</span>
            <input type="number" name="numero" class="form-control" placeholder="276" required>
        </div>
        <table class="table">
            <tr>
                <td><button class="btn btn-primary btn-lg" type="submit">Enviar</button></td>
                <td><button type="button" class="btn btn-warning btn-lg"><a href="./ClienteRegistrar.php">Regresar</a></button></td>
            </tr>
        </table>
    </div>
    </form>
</body>
</html>