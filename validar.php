
<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

session_start();

$_SESSION['usuario'] = $usuario;

include('./conexionBDD.php');

$consulta="SELECT *FROM public.usuarios 
WHERE  email_user = '$usuario' and contraseña_user='$contraseña'";

$resultado=pg_query($con,$consulta);

$row=pg_num_rows($resultado);

if($row){
    header("location:formularioReg.php");
}
 else {
  
    include("./index.php");
   
    ?>
  <h2 class="bad"> Error! en la autentificación, vuelva a intentar</h2>
    <?php 
}
pg_close($con);
?>

