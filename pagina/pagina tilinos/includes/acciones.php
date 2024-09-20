<?php
include'includes/querys.php';
include'includes/conecta.php';
include'includes/acciones.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <form action ="<?php echo $_Server['php_SELF'];" </form>method="Post">
        <input type ="text" name="Usuario" placeholder="Usuario" class="form-control" required/>
        <input type ="password" name="pass" placeholder="Password" class="form-control" required/>
        <input type ="submit" name="btningresar" class="btn-sm btn-succes" value="Ingresar"/>

    
    </form>

</body>
</html>

<?php
if(isset($_POST['btningresar'];)){


    $Usuario=$Conecta->real_escape_string($_POST['Usuario']);
    $pass=$Conecta->real_escape_string($_POST['pass']);
    $Consulta="SELECT Usuario,Pass FROM Usuarios WHERE Usuario='$Usuario' and Pass='$pass' ";
    $Ejecuta=$Conecta->query($Consulta);
    if($Ejecuta > 0){
        $Usuariok=$Ejecuta['Usuario'];
        $Passk=$Ejecuta['pass'];
        $_Sesion['Usuario'];

        if($Usuario==$Usuariok and $pass==$Passk){
            location="index.php";
        }
        else{
            echo "Usuario o contraseña incorrectos";
        }
    
    }





}


?>