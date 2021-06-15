<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base_url?>css/calendar.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?=$base_url?>js/es-ES.js"></script>
        <script src="<?=$base_url?>js/jquery.min.js"></script>
        <script src="<?=$base_url?>js/moment.js"></script>
        <script src="<?=$base_url?>js/bootstrap.min.js"></script>
        <script src="<?=$base_url?>js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" href="<?=$base_url?>css/bootstrap-datetimepicker.min.css" />
       <script src="<?=$base_url?>js/bootstrap-datetimepicker.es.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="paginacss/estilocontacto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelería</title>
</head>
<body>
<div class="contenedor">
<section id="cont-principal">
<h1>PASTELES POR ENCARGO</h1><br>
<h3></h3>
<p>Horneamos el pastel de tus sueños, 100% personalizado y decorado como tu quieras. Ponte en contacto para ser atendido personalmente por uno de nuestros asesores.</p>
<h3>Teléfonos</h3>
<p>2215-5833</p>
<p>También puedes llamarnos al 2216-7724 o escribirnos por medio de nuestro chat en vivo.</p>
</section>

<aside id="barra-lateral">
<div class="slider">
<ul>
<li>
<img src="banner-img/1.jpg"alt="">
</li>
<li>
<img src="banner-img/tabla1.png" alt="">
</li>
<li>
<img src="banner-img/tabla2.png" alt="">
</li> </ul></div>
<br>
<h3>Redes Sociales</h3>
<a href="https://www.facebook.com/">facebook</a>
<a href="https://www.instagram.com/?hl=es-la">instagram</a>
<a href="https://web.whatsapp.com/">whatsapp</a>
</aside>
</div>
</body>
</html>