!DOCTYPE html>
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
$k = 0;

//Start Loop up to any number of your choice for e.g. 200
while($k < 200) {
    if(fn_prime($k)) {
        echo "$k is a prime number<br/>";
    } else {
        echo "$k is not a prime number!<br/>";
    }
    $k++;
}
?>
</body>
</html>
