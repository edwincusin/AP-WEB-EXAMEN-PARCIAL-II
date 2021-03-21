<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos2.css">
</head>

<body>
    <form action="" method="post">
        <?php
    include('./conexionBDD.php');
    ?>
        <div class="contenedor2">
            <div class="salir">
                <a  href="./cerrar.php" style="text-decoration:none; color: red; font-weight: bold;" >Cerrar Sesión </a>
        </div>
            <header>
                <h2>Suscripción EDWIN CUSINANTAMBA</h2>
            </header>

            <p> <span>Nota: </span> Este es un formulario de ejemplo en el que los datos aqui se guardaran en una base
                de datos</p>
            <div class="grid">
                <div>
                    <table>
                        <TR>
                            <td><label for="">Nombre: </label></td>
                            <td><input type="text" maxlength="25" size="28" placeholder="Nombre" name="nombre"></td>
                        </TR>
                        <TR>
                            <td><label for="">Apellido: </label></td>
                            <td><input type="text" size="28" maxlength="25" placeholder="Apellido" name="apellido"></td>
                        </TR>
                    </table>
                </div>
                <div>
                    <table>
                        <TR>
                            <td><label for="">e-mail: </label></td>
                            <td><input type="text" maxlength="40" size="45" placeholder="Correo electrónico" name="email"></td>
                        </TR>
                        <TR>
                            <td><label for="">Contraseña: </label></td>
                            <td><input type="password" name="contraseña"
                                    maxlength="20" size="22"
                                    pattern=".{8,15}" placeholder="Minimo 8 caracteres " required
                                    oninvalid="this.setCustomValidity('Se Requiere 8 digitos mínimo')"
                                    oninput="this.setCustomValidity('')"
                                    oninvalid="this.setCustomValidity('Campo obligatorio')"
                                    oninput="this.setCustomValidity('')"
                                ></td>
                        </TR>
                    </table>
                </div>
            </div>
            <div class="grid2">
                <div>
                    <label for=""><span>Sexo</span> </label>
                    <p><input type="radio" name="sexo"> Hombre</p>
                    <p><input type="radio" name="sexo"> Mujer</p>
                </div>
                <div>
                    <label for=""><span>Nivel de estudios</span> </label>
                    <p><input type="radio" name="nivelEst"> Certificado escolar</p>
                    <p><input type="radio" name="nivelEst"> Graduado en E.S.O</p>
                    <p><input type="radio" name="nivelEst"> Bachiller - Formación Profesional </p>
                    <p><input type="radio" name="nivelEst"> Diplomado</p>
                    <p><input type="radio" name="nivelEst"> licenciado o Doctorado</p>
                </div>
                <div>
                    <label for=""><span>Interesado en los siguientes temas:</span> </label>
                    <p><input type="checkbox" name="tema"> Música</p>
                    <p><input type="checkbox" name="tema"> Deportes</p>
                    <p><input type="checkbox" name="tema"> Cine</p>
                    <p><input type="checkbox" name="tema"> Libros</p>
                    <p><input type="checkbox" name="tema"> Ciencia</p>
                </div>
            </div>
          
            <input type="submit" value=" &#128233; Grabar" name="grabar" class="boton">   
            <?php
    include('./conexionBDD.php');
    ?>
            
            <footer> Examen Parcial II de  Aplicaciones Web - Sexto Semestre Sarrera de Analisis de Sistemas - EDWIN CUSIN</footer>
        </div>
       

    </form>

</body>

</html>

<?php

if(isset($_POST['grabar'])){

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $contraseña=$_POST['contraseña'];
    $email=$_POST['email'];
    
    include('./conexionBDD.php');
    
    $consulta="INSERT INTO public.usuarios(nombre_user, apellido_user, email_user, contraseña_user)
        VALUES ('$nombre', '$apellido', '$email', '$contraseña');";
        $resultado=pg_query($con,$consulta);
        
    
        if(!$resultado){
            echo '<h2 style="color:red;font-size:20px;font-family:calibri ; bac"> ERROR!</h2 p> ';
        }else{
            echo '<h2  style="color:green;font-size:20px;font-family:calibri ;"> Usuario Registrado Exitosamente</h2 > ';
        }
}

?>