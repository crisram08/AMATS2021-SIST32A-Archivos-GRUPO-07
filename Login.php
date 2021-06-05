<?php 
  
$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
  header('location: sistema/');
}else{

  if(!empty($_POST))
  {
    if(empty($_POST['usuario']) || empty($_POST['clave']))
    {
      $alert = 'Ingrese su usuario y su calve';
    }else{

      require_once "conexion.php";

      $user = mysqli_real_escape_string($conection,$_POST['usuario']);
      $pass = md5(mysqli_real_escape_string($conection,$_POST['clave']));

      $query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario= '$user' AND clave = '$pass'");
      mysqli_close($conection);
      $result = mysqli_num_rows($query);

      if($result > 0)
      {
        $data = mysqli_fetch_array($query);
        $_SESSION['active'] = true;
        $_SESSION['idUser'] = $data['idusuario'];
        $_SESSION['nombre'] = $data['nombre'];
        $_SESSION['email']  = $data['email'];
        $_SESSION['user']   = $data['usuario'];
        $_SESSION['rol']    = $data['rol'];

        header('location: sistema/');
      }else{
        $alert = 'El usuario o la clave son incorrectos';
        session_destroy();
      }


    }

  }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | CUPCAKE SWEET</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <h1></h1>
<div class="header agile">
  <section id="container">
  <div class="center">
          <center>
             <img src="img/logo.png" width="300" height="300"   alt="" >
        </center>
               
         <br>
        <br>
          <div class="wrap">
    <div class="login-main wthree">
      <div class="login">
      <h3>Iniciar sesión</h3>
      <form action="" method="post">
        <input type="text" name="usuario" placeholder="Ingrese su usuario">
        <input type="password" name="clave" placeholder="Ingrese su contraseña">
        <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
        <input type="submit" value="Acceder">
      </form>
      
      </section>
      
    </div>
  
</div>
</div>              
  
</body>
</html>