<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $ev1=$_POST["T1"];
    $ev2=$_POST["T2"];
    $ev3=$_POST["T3"];
    $ev4=$_POST["T4"];
    $ev5=$_POST["T5"];
    $ev6=$_POST["T6"];

    $sv1=$_POST["T7"];
    $sv2=$_POST["T8"];
    $sv3=$_POST["T9"];
    $sv4=$_POST["T10"];
    $sv5=$_POST["T11"];
    $sv6=$_POST["T12"];

    $av1=$_POST["T13"];
    $av2=$_POST["T14"];
    $av3=$_POST["T15"];
    $av4=$_POST["T16"];
    $av5=$_POST["T17"];
    $av6=$_POST["T18"];

    $rv1=$_POST["T19"];
    $rv2=$_POST["T20"];
    $rv3=$_POST["T21"];
    $rv4=$_POST["T22"];
    $rv5=$_POST["T23"];
    $rv6=$_POST["T24"];

    $eco=[$ev1+$ev2+$ev3+$ev4+$ev5+$ev6];
    $soc=$sv1+$sv2+$sv3+$sv4+$sv5+$sv6;
    $amb=$av1+$av2+$av3+$av4+$av5+$av6;
    $rad=$rv1+$rv2+$rv3+$rv4+$rv5+$rv6;

    $seco=(0);
    $ssoc=(0);
    $samb=(0);
    $srad=(0);

    if ($eco==1) {
      $seco+1;
    }elseif ($eco==2) {
      $seco+2;
    }elseif ($eco==4) {
      $seco+4;
    }elseif ($eco==3) {
      $seco+3;
    }elseif ($eco==5) {
      $seco+5;
    }elseif ($eco==6) {
      $seco+6;
    }else {
      $seco+7;
    }

    if ($soc==1) {
      $ssoc+1;
    }elseif ($soc==2) {
      $ssoc+2;
    }elseif ($soc==4) {
      $ssoc+4;
    }elseif ($soc==3) {
      $ssoc+3;
    }elseif ($soc==5) {
      $ssoc+5;
    }elseif ($soc==6) {
      $ssoc+6;
    }else {
      $ssoc+7;
    }

    if ($amb==1) {
      $samb+1;
    }elseif ($amb==2) {
      $samb+2;
    }elseif ($amb==4) {
      $samb+4;
    }elseif ($samb==3) {
      $samb+3;
    }elseif ($amb==5) {
      $samb+5;
    }elseif ($amb==6) {
      $samb+6;
    }else {
      $samb+7;
    }

    if ($rad==1) {
      $srad+1;
    }elseif ($rad==2) {
      $srad+2;
    }elseif ($rad==4) {
      $srad+4;
    }elseif ($rad==3) {
      $srad+3;
    }elseif ($rad==5) {
      $srad+5;
    }elseif ($rad==6) {
      $srad+6;
    }else {
      $srad+7;
    }

    echo "n° : ".$seco."<br>";
    echo "n° : ".$ssoc."<br>";
    echo "n° : ".$samb."<br>";
    echo "n° : ".$srad."<br>";


     ?>

  </body>
</html>
