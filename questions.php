<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    /*economia*/

      /*¿sueldos altos?*/

      $y2=$_POST["T2"];
      $n2=$_POST["T2"];

      /*¿bajos impuestos?*/

      $e1=$_POST["T1"];
      $n1=$_POST["T1"];

      /*¿poco desempleo?*/

      $y3=$_POST["T3"];
      $n3=$_POST["T3"];

    /*social*/

      /*¿poca pobreza?*/

      $e1=$_POST["T1"];
      $n1=$_POST["T1"];

      /*¿derechos de la mujer?*/

      $e1=$_POST["T1"];
      $n1=$_POST["T1"];

      /*¿protección de minorías?*/

      $y3=$_POST["T3"];
      $n3=$_POST["T3"];



    /*clima*/
      $diputa2=0;

        $diputa2=$favor+$contra+$nosabe;
        echo "Número de diputados: ".$diputa2.".<br>";

        $pfavor=$favor*100/$diputa2;
        echo "A favor: ".$pfavor."%.<br>";
        $pcontra=$contra*100/$diputa2;
        echo "En contra: ".$pcontra."%.<br>";
        $pnosabe=$nosabe*100/$diputa2;
        echo "Se abstiene: ".$pnosabe."%.<br>";
     ?>

  </body>
</html>
