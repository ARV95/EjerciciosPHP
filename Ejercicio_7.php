!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>
  
<?php
function getPrimes($finish)
    {
        $number = 2;
        $range = range($number,$finish);
        $primes = array_combine($range,$range);
        while($number*$number < $finish){
            for($i=$number; $i<=$finish; $i+=$number){
                if($i==$number){
                    continue;
                }
                unset($primes[$i]);
            }
            $number = next($primes);
        }
        return $primes;
    }
?>
</body>
</html>
