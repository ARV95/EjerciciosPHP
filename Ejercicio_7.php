<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>



<?php
if (isset($_POST['num'])) {
  $num = $_POST['num'];
}
 
if ($num != null) {
  if (!esPar($num)) {
    echo "<h3 align='center'>Ahora toca ver si es primo </h3>";
  }
} else {
  echo "<br>";
  echo "<h3 align='center'>Debe ingresar un numero </h3>";
  echo "<h3 align='center'><a href='calcularr.html'>Volver al formulario </a></h3>";
}
 
function esPar($num) {
  echo "<h3 align='center'><font color='#C0B840'>";
  if ($num % 2 == 0) {
    echo "El numero $num es par";
    echo "</font></h3>";
    echo "<h3 align='center'><a href='calcularr.html'>Volver al formulario </a></h3>";
    return true;
  } else {
    echo "El numero $num es impar";
    echo "</font></h3>";
    echo "<h3 align='center'><a href='calcularr.html'>Volver al formulario </a></h3>";
    return false;
  }
  
  ?>
    
</body>
</html>
