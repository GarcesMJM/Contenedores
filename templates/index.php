<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <div class="box">
        <form action="" method="POST">
            <div class = "usuario">
                <label for="">Usuario</label>
                <input name="user" type="text" id="user" autocompleted="off">
            </div>
        
            <div class="contraseña">
                <label for="">Contraseña</label>
                <input name="password" type="password" id="password" autocompleted="off">
            </div>
            <input type="submit" value="Iniciar Sesión">
           <div class="registro">
                <a class="registrar" href="{{ url_for('registrar.php') }}">Registrarse</a>
            </div>
        </form>
    </div>

</body>
</html>
<?php 

    if(isset($_POST['user']) && isset($_POST['password']))
    {
        $user=$_POST['user'];
        $password=$_POST['password'];
        $file = fopen("Base_datos.txt", "r");
        $separador ="|";

        if($user != null  && $password != null)
        {
            while(!feof($file))
            {
                $traer = fgets($file);
                $separado = explode($separador, $traer);
                if (in_array($user, $separado) && in_array($password, $separado))
                {
                    $position2= array_search($user, $separado);
                    $position3 = array_search($password, $separado);

                    if($position2 == true && $position3 == true)
                    {
                        fclose($file);
                        print "<script>window.setTimeout(function() { window.location = 'index.php' });
                        alert('Se encontró el usuario exitosamente')</script>";
                        
                        return $user;
                    }
                }
                else
                {
                    print "<script>alert('No se encontró el usuario')</script>";
                    return;
                }
            }
        }
        else 
        {
            print "<script>alert('Ingrese los datos que se piden')</script>";
        }
    }
        
?>