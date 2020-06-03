!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>
  
<?php
$n = 11;
    $o = $_POST["maxprime"];
    echo 'The script calculated the next primenumbers:</br>';
    echo '2, 3, 5, 7, ';
    while (true) { 
        $t = 6;
        while (true) { 
            if ($n % ($t - 1) == 0) {
                break;
            } 
            if ($n % ($t + 1) == 0) {
                break;
            }
            if ($t > sqrt($n)) {
                echo("$n,  "); 
                break;
            } 
            $t += 6; 
        }
        if (($n + 1) % 6 == 0) {
            $n += 2;
        } else {
            $n += 4;
        } 
        if ($n > $o) {
            break;
        }
    }
?>
</body>
</html>
