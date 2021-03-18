<?php

if(isset($_POST['grabar'])){

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $contraseña=$_POST['contraseña'];
    $email=$_POST['email'];
    
    include('./conexionBDD.php');
    
    $consulta="INSERT INTO public.usuarios(	nombre_user, apellido_user, email_user, contraseña_user)
        VALUES ('$nombre', '$apellido', '$email', '$contraseña');";
        $resultado=pg_query($con,$consulta);
        
    
        if(!$resultado){
            echo '<p style="color:red;font-size:20px;font-family:calibri ; background: black"> ERROR!</p> ';
        }else{
            echo '<p style="color:green;font-size:20px;font-family:calibri ; background: yellow"> Usuario Registrado Exitosamente</p> ';
        }
}
?>