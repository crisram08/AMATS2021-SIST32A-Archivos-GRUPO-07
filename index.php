<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="paginacss/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelería</title>
</head>
<body>
    <div class="header">
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Cotizar</a></li>
                <li><a href="index.php?pagina=productos.php">Productos</a></li>
                <li><a href="#">LOGIN</a></li>
            </ul>
        </nav>
        <center>
        <?php 
        if(isset($_GET["pagina"])){
        include($_GET["pagina"]);
        }
        else{
            print '<div class="slider">';
		    print '<ul>';
			print '<li>';
			print '<img src="img/chemsito.jpg"alt="">';
			print '</li>';
			print '<li>';
			print '	        <img src="img/Chems.jpg" alt="">';
			print '       </li>';
			print '       <li>';
			print '	        <img src="img/chemsa.jpg" alt="">';
			print '       </li>	';
		    print'</ul>';
            print'</div>';  
        }
    ?>
    </div> 
</body>
</html>