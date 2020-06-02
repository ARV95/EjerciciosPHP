<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>
  
<?php
//Almacenamos en la variable $num1 el valor ingresado en la caja de texto del formulario.
$num1 = $_POST[«numero_primo2»];
//Lamamos al archivo funcion_primo.php para poder utilizar la función primo.
include («funcion_primo.php»);

//Creamos una tabla para desplegar los datos
echo ‘<table width=»460″ border=»0″>’;

//Recorremos un bucle desde el número ingresado hasta el número 1.
for ($j = $num1; $j >= 1; $j–) {
//En un vector llamamos al método primo y le pasamos el valor de la variable $j, cada valor del vector $resp[] almacenará la información del número $j diciendo si es true en caso de ser primo, o false en caso contrario
$resp[$j] = primo($j);
echo ‘<tr>’;

//En caso de que el valor almacenado en cada posición $j en el vector sea verdadero le hacemos que despliegue que dicho número es primo, o que despliegue que no es primo si el valor almacenado es falso.
if ($resp[$j] == true) {
echo ‘<td width=»180″>’.$j.’ es primo </td>’;
}
else {
echo ‘<td width=»180″>’.$j.’ no es primo </td>’;
}
echo ‘</tr>’;
}
echo ‘<table>’;



  ?>
    <form id=»form1″ name=»form1″ method=»post» action=»procesar_primos_sucesivos.php»>
<table width=»460″ border=»0″>
<tr>
<td colspan=»2″><div align=»center»><strong>Ingreso número</strong></div></td>
</tr>
<tr>
<td><strong>Ingrese un número:</strong></td>
<td><label>
<input type=»text» name=»numero_primo2″ id=»numero_primo2″ />
</label></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan=»2″><div align=»center»>
<label>
<input type=»submit» name=»ok» id=»ok» value=»Ok» />
</label>
</div></td>
</tr>
</table>
</form>
</body>
</html>
