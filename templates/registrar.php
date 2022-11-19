<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
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
<style>
    *{
        font-family: sans-serif;
        font-size: 14px;
    }
    body {
        margin: 0;
        /*border: 1px solid black;*/
    }
    
    .navegador ul{
        margin-top: 0px;
        padding-top: 20px;
        background-color: black;
        width: 97%;
        height: 40px;
        
    }
    
    .navegador ul li a{
        text-decoration: none;
        color: white;
        font-size: 15px;
    }
    .navegador ul li a:hover{
        
        font-size: 18px;
        transition: .5s;
    }
    
    .box {
        border: 1px solid black;
        border-radius: 15px;
        padding: 25px;
        margin: 70px 500px 100px 500px;
        position: relative;
        text-align: center;
        top: 50px;
    }
    
    /*text-align: center;
        position: relative;
        top: 150px;
        border: 1px solid black;
        padding: 0px;
        margin: 0px;
        background: green;*/
    
    /*ESPACIO ENTRE FORM*/
    
    .box .name {
        margin-bottom: 25px;
        /*border: 1px solid black;*/
    }
    .box .name input {
        width: 250px;
        height: 30px;
    }
    
    .box .lname {
        margin-bottom: 25px;
    }
    .box .lname input {
        width: 250px;
        height: 30px;
    }
    
    
    .box .User {
        margin-bottom: 25px;
    }
    .box .User input {
        width: 250px;
        height: 30px;
    }
    
    
    .box .Password {
        margin-bottom: 25px;
    }
    .box .Password input {
        width: 250px;
        height: 30px;
    }
    
    .box .boton {
    
        margin-top: 25px;
        width: 150px;
        height: 30px;
    
    }
    
    .box .boton:hover {
    
        width: 160px;
        height: 35px;
        transition: .5s;
    
    }
</style>
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