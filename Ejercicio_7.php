<!DOCTYPE html>
<html>
<body>
    <h1>Ejercicio 7</h1>
   
<?php
    function isPrime_v2($num) {
    static $knownPrimes=[3]; // array to save known primes

    if($num == 1)
        return false;

    if($num == 2 || $num == 3) //added '3'
        return true;

    if($num % 2 == 0)
        return false;

    $ceil = ceil(sqrt($num)); //same purpose, good point from Farkie

    // Check against known primes to shorten operations
    // There is no sense to check agains numbers in between
    foreach($knownPrimesas $prime){
        if ($prime>$ceil)
            break;
        if($num===$prime)
            return true;
        if($num % $prime == 0)
            return false;
    }


    /**
     * end($knownPrimes) % 2 !==0 - mathematically guaranteed
     * start with latest known prime
     */
    for($i = end($knownPrimes)+2; $i <= $ceil; $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }
    $knownPrimes[]=$num;
    return true;
}
?>
<form action="Numeros.php" method="post">
        Ingrese un numero: <input type="text1"><br><br>
        <input type="submit" name="primo">
    </form>
    
    </body>
</html>
