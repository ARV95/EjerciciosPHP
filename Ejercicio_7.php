<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>
  
<?php
$p=7;
$s=0;
  
$nro=7;

do{
  if($nro%2==0)
  {
    $s=$s+$nro;
  }else{
    $p=$p+$nro;
  }
  $nro=$nro+1;
  
}while($nro<=10)

  echo "suma par=$s<br>";
  echo "suma impar=$p<br>";
  
  
  
?>
</body>
</html>
