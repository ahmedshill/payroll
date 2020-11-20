<?php
if (isset($_GET['calculate']))
{

    echo "<br>";
    echo "<br>";

    $sum = 'var10';
    $summ = 'var11';
    $total = 'var5';
    $payee1 = 'var8';
    $payee = 'var7';
    $deduction6 = 'var12';
    $deduction7 = 'var13';
    $deduction8 = 'var14';

    $deduction5 = 'var9';
    $deduction4 = 'var6';
    $deduction3 = 'var5';   //total of nssf relief and nhif
    $deduction2 = 'var4';   //for nssf
    $deduction1 = 'var3';   //for relief
    $deduction = 'var2';    //for nhif
    $var1 = $_GET ['gross'];


    /*payee calculation*/


    if ($var1<=12298)
    {
        $deduction4=  0.1*$var1;
        echo "payee = ".$deduction4;
    }


    /* for ($i=12299; $i <= 23885;$i++ )
         {
         # code...
         $payee = $var1-12298;
         $payee1 = $payee*0.15;
         $summ =  $payee1 + 1229.8;
         echo "$summ";
     }*/

    if ($var1<=23885 && $var1>12298){
        $sum = 1229.8;
        $payee = $var1-12298;
        $deduction5 = $payee*0.15;
        $payee1 = array($deduction5,$sum);
        echo array_sum($payee1);
        /*$payee1 = $deduction5 + 1229.8;
        echo "payee = ".$payee1;*/
    }
    if ($var1>23885 && $var1<=35472) {
        $sum = 2967;
        $payee = $var1 - 23885;
        $deduction6 = $payee * 0.20;
        $payee1 = array($deduction6, $sum);
        echo array_sum($payee1);
    }

    if ($var1>35472 && $var1<=47059) {
        $sum = 5284;
        $payee = $var1 - 35472;
        $deduction7 = $payee * 0.25;
        $payee1 = array($deduction7, $sum);
        echo array_sum($payee1);
    }

    if ( $var1>47060) {
        $sum = 8180;
        $payee = $var1 - 47059;
        $deduction8 = $payee * 0.30;
        $payee1 = array($deduction8, $sum);
        echo  array_sum($payee1);

    }}