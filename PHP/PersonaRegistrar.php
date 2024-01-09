<?php
    $db = mysqli_connect('localhost','root','','bodegayanin');
    $command =  mysqli_query($db, 'SELECT codigo,nombre FROM tbltipodocumento ORDER BY nombre');
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
    <form action="../PHP/PersonaRegistrarCon.php" method="post">
    <div class="contenedor-padre">
        <u><i><h1 style="margin-bottom: 20px;">Registre sus datos</h1></i></u>
        <div class="input-group">
            <span class="input-group-text">Nombres</span>
            <input type="text" name="nombre"  class="form-control" placeholder="Juan" required>
        </div>
        <div class="input-group">
            <span class="input-group-text">Apellido Paterno</span>
            <input type="text" name="appaterno" class="form-control"  placeholder="Perez" required>
        </div>
        <div class="input-group">
            <span class="input-group-text">Apellido Materno</span>
            <input type="text" name="apmaterno" class="form-control"  placeholder="Gomez" required>
        </div>
        <div class="input-group">
            <span class="input-group-text">Documento</span>
            <td>
                    <select name="id">
                    <?php
                        while ($row = mysqli_fetch_array($command)) 
                        {
                    ?>
                        <option value="<?php echo $row['codigo']; ?>"><?php echo $row['nombre']; ?></option>                
                    <?php
                        }
                    ?>
                    </select>
            </td>
        </div>
        <div class="input-group">
            <span class="input-group-text">Nro documento</span>
            <input type="text" name="nrodocumento" class="form-control" placeholder="876554321" required>
        </div>
        <div class="input-group">
            <span class="input-group-text">Celular</span>
            <input type="text" name="cel"  class="form-control" placeholder="987654321" required> 
        </div>
        <div class="input-group">
            <span class="input-group-text">Correo</span>
            <input type="text"  name="correo" class="form-control" placeholder="ejempl@gmail.com" required>
        </div>
        <div class="input-group">
            <span class="input-group-text">Contraseña</span>
            <input type="password" name="password" class="form-control" placeholder="12345" required>
        </div>
        <div class="input-group">
            <span class="input-group-text">Verificar Contraseña</span>
            <input type="password" name="" class="form-control" placeholder="12345" required>
        </div>
        <table class="table">
            <tr>
                <td><button class="btn btn-primary btn-lg" type="submit">Enviar</button></td>
                <td><button type="button" class="btn btn-warning btn-lg"><a href="../HTML/Ingresar.html" style="color:white; text-decoration: none;">Regresar</a></button></td>
            </tr>
        </table>
        <div>
            <p>¿El tipo de documento que tiene no se encuentra registrado?</p>
            <p>Registrelo <a href="../HTML/TipoDocumento.html">Aqui</a></p>
        </div>
    </div>
    </form>
</body>
</html>