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
    <link rel="stylesheet" type="text/css" href="paginacss/estilonosotros.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelería</title>
</head>
<body>
<div class="contenedor">
<section id="cont-principal">
<h1>NUESTRA HISTORIA</h1><br>
<p> Todo inicia hace más de 60 años cuando una talentosa mujer sabía que tenía un gran sazón en la comida y decide emprender su propio negocio llamado Tienda “El Triunfo”. Pasando los años se toma una gran decisión la cual es elaborar pan dulce. El coraje y la visión del negocio hace que la tienda de conveniencia se convierta en una panadería.

Eso provoca que mucho tiempo después se decida darle un giro al negocio familiar; equipándolo con máquinas especializadas en hacer pan y es así como en el año 1987 la tienda de conveniencia se transforma en “Panadería La Salvadoreña” manteniendo siempre ese amor por el país ya que ha sido el lugar de crecimiento de la empresa, es así como decidimos emprender en esta nueva aventura, nuevo nombre, nuevas visiones, pero manteniendo el mismo sazón y amor de nuestra fundadora.

El camino no fue fácil, existieron diferentes momentos que marcaron a la panadería y que impulsaron a no darnos por vencidos, Dios nos bendijo con un excelente equipo de trabajo, que al igual que nosotros amaba nuestra panadería y gracias a ellos brindamos un producto de calidad a nuestros clientes.</p>
<p>El amor por la cocina que nuestra fundadora nos transmitió influyó a diversificar el negocio y en el 2001 se incorporó la pastelería, dándole un toque de dulzura al negocio de la familia.

Y es así como el negocio se convirtió en “Pastelería y Panadería La Salvadoreña” expandiéndonos a todo el país.

En la actualidad tenemos 25 salas en todo el país de las cuales 7 están ubicadas en el municipio en donde nacimos Santa Tecla, adicional tenemos salas en San Salvador, Santa Ana, Lourdes, Quezaltepeque, La Libertad, Soyapango, Sonsonate e Ilopango teniendo en todas el mismo objetivo llevar un pedacito de Tecla a cada familia salvadoreña.

En la familia siempre ha existido un dicho que nos ha mantenido fuerte “Hay que dar para recibir” nosotros ofrecemos calidad en nuestros productos y los clientes nos premian con lealtad.</p>
</section>



<aside id="barra-lateral">
<h2>¿Quiénes somos?</h2>
<h3>Misión:</h3>
<p>Estamos comprometidos con pasión a la elaboración de los mejores productos, generando una experiencia única en nuestros clientes. </p>
<br>
<h3>Visión:</h3>
<p>Ser reconocidos como la mejor panadería y pastelería del El Salvador, en cuanto a productos y servicios de excelencia, calidad e innovación continua.</p>
</aside>
</div>
</body>
</html>