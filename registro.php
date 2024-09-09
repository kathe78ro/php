<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Datos</title>
</head>
<body>
    <?php
        $server = "localhost";
        $ususario = "root";
        $contraseña = "";
        $bd = "ejemplo";

        $conexion = mysqli_connect($server, $ususario, $contraseña, $bd) or die ("Error en la conexión");

        $clave = $_POST['txtClave'];
        $nombre = $_POST['txtNombre'];
        $sexo = $_POST['cmbSexo'];
        
        $insertar = "INSERT INTO datos VALUES ('$clave','$nombre','$sexo')";
        $resultado = mysqli_query($conexion, $insertar) or die("Error al insertar los registros.");

        mysqli_close($conexion);
        echo "Datos insertados correctamente";
    ?>
</body>
</html>