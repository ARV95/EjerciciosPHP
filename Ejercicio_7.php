<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>



<?php
$num=0;
   $num=$_POST["num"];
   $cont=0;
    for ($i=1; $i <=$num; $i++) {
   if ($num % $i==0) {
 $cont=$cont+1;
  }
   }

    if ($cont==2) {
 echo "el número es primo";
    echo "<h3 align='center>";
   }
   else {
  echo "el número no es primo";
 echo"<h3 align='center>";
    }
   ?>
  <br/>
   <?php
   if(isset($_POST['num']))  
   {
      $num = $_POST['num'];
   }
   if($num != null)
   {
      if(!esPar($num))
    {

    }
   }
   else 
   {
       echo "<br>";
      echo "<h3 align='center'>Debe ingresar un numero </h3>";
    echo "<h3 align='center'><a href='calcularr.html'>Volver al formulario </a></h3>";
   }

   function esPar($num)
   {
      echo "<h3 align='center'><font color='#C0B840'>";
     if ($num % 2 == 0)
      {
      echo "El numero $num es par"; 

       echo "<a href='calcularr.html'>Volver al formulario";
       return true;
     }
   else
    {
      echo "El numero $num es impar";

       echo "<a href='calcularr.html'>Volver al formulario";
       return false;
    }

    if (esPrimo($num)) {
        echo "...";
    } else {
        echo "...";
    }
}
?>
    
    
</body>
</html>
