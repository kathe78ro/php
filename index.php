<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD_PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="registro.php" method="POST">
        Clave: <input type="text" name="txtClave"><br>
        Nombre: <input type="text" name="txtNombre"><br>
        Sexo:
        <select name="cmbSexo">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select><br>
        <input type="submit" value="registrar" name="btnRegistrar">
    </form>
</body>
</html>