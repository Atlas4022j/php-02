<?php
#Ingresar Datos:
#-Solicita al usuario que ingrese el precio de tres productos diferentes.
$p1 = 10;
$p2 = 15;
$p3 = 20;
#-Solicita al usuario que ingrese la cantidad comprada de cada uno de estos productos.
$c1 = 2;
$c2 = 4;
$c3 = 6;

#Realizar Cálculos:
#Calcula el subtotal de la compra, que es la suma del precio de cada producto multiplicado por su cantidad.
$subtotal = ($p1 * $c1) + ($p2 * $c2) + ($p3 * $c3);
#Calcula el monto de impuestos aplicado al subtotal.
$impuestos = $subtotal * 0.10;
#Calcula el descuento aplicado al subtotal.
$descuento = $subtotal * 0.05;
#Calcula el total final sumando el subtotal y el monto de impuestos, y restando el descuento aplicado.
$total = $subtotal + $impuestos - $descuento;

#Mostrar Resultados:
echo "Resultados:" . "<br>";
#Muestra un mensaje que incluya:
#El subtotal de la compra.
echo "El subtotal es de : " . $subtotal . "<br>";
#El monto de impuestos.
echo "El monto de impuestos es de: " . $impuestos . "<br>";
#El descuento aplicado.
echo "El descuento aplicado es de: " . $descuento . "<br>";
#El total final de la compra.
echo "El total final es de: " . $total;

