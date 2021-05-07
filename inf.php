<html>
    <body>
        <form method="post">
            <table border="1" align="center">
            <tr>
                <td colspan="2" align="center"><h1>Ejercicio 10 </h1></td>
                
            </tr>
                <tr>
                <td>Ingrese cantidad notas</td>
                <td><input type="number" name="notas" ></td>
                </tr>
                <tr>
                <td colspan="2"><input type="submit" style="width:100%" align="center" value="Siguiente" name="siguiente"></td>
                
                <tr>

            </table>
        </form>
    <body>

<?php
if (isset($_POST["siguiente"])){
    $notas=$_POST["notas"];
$aprobado=0;
$Aprobado="";
$reprobo=0;
$Reprobado="";
     if($notas>=7){
            $Aprobado=1;
            $aprobo= $aprobo+=$Aprobado;
        }
        else{
            $Reprobado=1;
            $reprobo= $reprobo+=$Reprobado;
        }   
echo "La cantidad de alumnos aprobados: $aprobo <br>";
echo "La cantidad de alumnos reprobados es: $reprobo";
}
   


?>

