<link rel="stylesheet" type="text/css" href="paginacss/estilocarrito.css">
<?php
    if(isset($_GET["tabla"])){
    $num=$_GET["tabla"];
    if($num==1){
        $imagen="img/chemsa.jpg";
        $nombre="PASTEL DE CARNE";
        $precio="$5.00";
    }
    if($num==2){
        $imagen="img/chemsito.jpg";
        $nombre="CUPCAKE";
        $precio="$2.50";
    }

    print"<center><div class='cuadro-producto'>";
        print"<img class='img-producto' src='$imagen' alt=''>";
    print"<center><div class='texto-producto'>";
        print"<h1>$nombre</h1>";
        print"<p>$precio</p>";

        print"<input type='number' min='0'>";
        print"<input type='submit' value='Añadir al Carrito'>";
    print"</div>";
    print"</div>";
}
?>

