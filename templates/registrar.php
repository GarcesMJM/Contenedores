<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" type="text/css" href="estilosphp-registrar.css">
</head>
<body>
    <nav class="navegador">
        <ul>
            <li><a href="{{ url_for('home') }}">Ingresar</a></li>
        </ul>
    </nav>
        <div class="box">
            <form action="" method="POST">
                <div class="name">
                    <!--<label>Nombre(s)</label>-->
                    <input name="name" id="name" type="text">
                </div>
            
                <div class="lname">
                    <!--<label>Apellidos</label>-->
                    <input name="lname" type="text">
                </div>
            
                <div class="User">
                    <!--<label>Usuario</label>-->
                    <input name="user" id="user" type="text">
                </div>
            
                <div class="Password">
                    <!--<label>Contraseña</label>-->
                    <input name="password" id="password" type="password">
                </div>
                <input class="boton" type="submit" value ="Registar">
            </form>
        </div>
</body>
</html>

<?php   
    $variable = 0;  

    if(isset($_POST['name']) && isset($_POST['lname']) && isset($_POST['user']) && isset($_POST['password']))
    {
        $name=$_POST['name'];
        $apellido=$_POST['lname'];
        $user=$_POST['user'];
        $password=$_POST['password'];
        if ($name != null && $apellido!= null && $user!=null && $password!=null)
        {
            $variable = 1;
            $file = fopen("Base_datos.txt", "a");
            fwrite($file, $name."|".$apellido."|".$user."|".$password."\n");
            fclose($file);
        }
        else
        {
            print "<script>alert('Ingrese los datos que se piden')</script>";

        }
    }
        
    if($variable == 1){
        
        print "<script>
                    window.setTimeout(function() { window.location = 'registrar.php' });
                    alert('Registrado exitosamente')
                </script>";
        
    }
?>