<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>
  
<?php
 //Prime Function
 function fn_prime($number) {
    $i = 2; $result = TRUE;
    while($i < $number) {
        if(!($number%$i)) {
            $result = FALSE;
        }
        $i++;
    }
    return $result;
 }

//Declare integer variable...
$k = 2;

//Start Loop up to any number of your choice for e.g. 200
while($k < 25) {
    if(fn_prime($k)) {
        echo "$k es un numero primo<br/>";
    } else {
        echo "$k no es un numero primo!<br/>";
    }
    $k++;
}
?>
</body>
</html>
