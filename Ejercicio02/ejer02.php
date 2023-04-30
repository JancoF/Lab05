
<?php
$Precio_actual = $_POST['valor1'];
$cantidad = $_POST['valor2'];

$nuevo_precio = $Precio_actual * 0.95;
echo "Nuevo precio de la gaseosa es de S/" . $nuevo_precio; 
echo "<br>";

$importe_compra = $cantidad * $nuevo_precio;
echo " Importe total de la compra es S/" . $importe_compra;
echo "<br>";

$importe_descuento = $importe_compra * 0.07;
echo "Descuento del  importe es S/" . $importe_descuento;
echo "<br>";

$importe_pagar = $importe_compra - $importe_descuento;
echo " Importe total a pagar es de S/" . $importe_pagar;
echo "<br>";

$obsequio = $cantidad * 2;
echo "Tu obsequio es " . $obsequio;

?>
