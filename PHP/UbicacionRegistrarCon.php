<?php 
    $direccion = $_POST['direccion'];
    $referencia = $_POST['referencia'];
    $numero = $_POST['numero'];
    $ndoc = $_POST['ndoc'];
    $db = mysqli_connect('localhost','root','','bodegayanin');
    $command = mysqli_query($db,"INSERT INTO tblUbicacion(direccion,lugarreferencia,numerocasa,codigocliente) VALUES('$direccion','$referencia','$numero','$ndoc') ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/clienteregistrar.css">
    <title>Registro Completo</title>
</head>
<body>
    <div class="registrar-php">
        <div class="jpg">
            <img src="../IMG/correct.png" alt="face-H" width="200" height="200">
        </div>
        <h1>!Se registro correctamente¡</h1><br>
        <button type="button" class="btn btn-outline-primary btn-lg"><a href="../HTML/Ingresar.html">Finalizar</a></button>
    </div>
</body>
</html>
<script>
        setTimeout(function(){
            window.location.href = "http://localhost/login2.0/HTML/Ingresar.html";
        }, 2000);
    // Handler for .ready() called.
</script>