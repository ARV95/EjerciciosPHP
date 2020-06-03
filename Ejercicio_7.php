<!DOCTYPE html>
<html>
<body>

<h1> Ejercicio 7</h1>
<?php
	header ("content-type: text/html;charset=\"utf-8\"");

echo "<h1>".$_GET['numero']."</h1>";

if(is_numeric($_GET['numero']) && $_GET['numero'] >=1){
	
	
    if($_GET['numero']%2!=0){
        echo "<h2>"."Es un numero primo"."</h2>";
    }

    else{
        echo "<h2>"."No es un numero primo"."</h2>";
    }

  
}


	
}
	
?>

<form>
Introduzca un numero:
<input name ="numero" type= "text" placeholder = "Introduzca un numero">

<input type="submit" value ="Ingresar">
</form>

</body>
</html>
