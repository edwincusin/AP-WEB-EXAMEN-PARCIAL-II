<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesión</title>
    <link rel="stylesheet" href="estilos1.css">
</head>
<body>
    <form action="validar.php" method="post">
        <div class="contenedor">
            <h1>Inicio de Sesión</h1>
            <h2>Aplicaciones Web</h2>
            <img src="img/login1.jpg">            
            
            <input type="text"  maxlength="20" placeholder="&#128102; Nombre de usuario" name="usuario" required>
            <input type="password" maxlength="20" placeholder="&#128274; Contraseña" name="contraseña"  required>
            <input type="submit" value=" &#128273; Ingresar" class="boton"> 

        </div>
    </form>
</body>
</html>