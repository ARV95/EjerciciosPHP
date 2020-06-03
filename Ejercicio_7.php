<!DOCTYPE html>
<html>
<body>
    <h1>Ejercicio 7</h1>
    <p>Programa que evalua si un numero ingresado es un numero primo.</p>
    <form action="Numeros.php" method="post">
        Ingrese un numero: <input type="text1"><br><br>
        <input type="submit" name="primo">
    </form>


<?php
    if(isset($_POST["primo"])){
        $n=$_POST["text1"];
        for($i=2;$i<=$n/2;$i++){
            if($n % $i ==0)
            {
                $f=1;
                break;
            }

        }
        if($f==0)
        {
            echo "$n es primo";
        }
        else
        {
            echo "$n no es primo";
        }


    }
?>
    </body>
</html>
