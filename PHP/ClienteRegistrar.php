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
    <link rel="stylesheet" href="../CSS/Cliente.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Registrar Cliente</title>
</head>
<body>
    <form action="./ClienteRegistrarCon.php" method="post">
    <div class="contenedor-padre" style="height: 500px;">
        <u><i><h1>Registrar mas Datos</h1></i></u><br><br>
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
        <br>
        <div class="input-group">
            <span class="input-group-text">Sexo</span>
            <input type="radio" name="sexo" value="M" id="masculino" class="label">            
            <label for="masculino" class="label" >Masculino</label>
            <input type="radio" name="sexo" value="F" id="femenino" class="label" >
            <label for="femenino" class="label">Femenino</label>
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-text">Fecha De Nacimiento</span>
            <input type="date" name="date" class="form-control" placeholder="" required>
        </div>
        <br>
        <table class="table">
            <tr>
                <td><button class="btn btn-primary btn-lg" type="submit">Enviar</button></td>
                <td><button type="button" class="btn btn-warning btn-lg"><a href="./PersonaRegistrar.php">Regresar</a></button></td>
            </tr>
        </table>
    </div>
    </form>
</body>
</html>