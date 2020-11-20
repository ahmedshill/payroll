<html>

<head>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-device-width: 480px)" href="css/mobile.css" />
    <script src="bootstrap-4.2/js/jquery.min.js"></script>
    <script src="bootstrap-4.2/js/popper.min.js"></script>
    <script src="bootstrap-4.2/js/bootstrap.min.js"></script>
    <style>
        body{
            padding-top: 100px;
            background-color:tan ;
            text-align: center;
            border: solid 1px black;
            font-size: 130%;
            border-radius:50px;
            -moz-border-radius:50px;
            -webkit-border-radius:50px;
            
        }
    </style>

</head>
<body>

<div class="container">
        <table class="table" rules="all">

    <?php
    if (isset($_GET['calculate']))
    {

        echo "<br>";
        echo "<br>";
        $payee2 = 'var18';
        $add = 'var17';
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
        $var2 = 'var15';
        $netpay = 'var16';




        echo "GROSS = " .$var1 ;
        echo "<br>";
        echo "<br>";
        $var2 = $var1-1080;
        echo "TAXABLE PAY = ".$var2 ;
        echo "<br>";
        echo "<br>";
        /*tax on taxable income calculation*/



        if ($var2<=12298)
        {
            $deduction4=  0.1*$var2;
            $sum=0;
            $payee1 = array($deduction4, $sum );

            echo   "TAX ON TAXABLE INCOME  = " ,array_sum($payee1);

        }

        if ($var2<=23885 && $var2>12298){
            $sum = 1229.8;
            $payee = $var2-12298;
            $deduction5 = $payee*0.15;
            $payee1 = array($deduction5,$sum);
            echo  "TAX ON TAXABLE INCOME = ", array_sum($payee1);

            
        }
        if ($var2>23885 && $var2<=35472) {
            $sum = 2967;
            $payee = $var2 - 23885;
            $deduction6 = $payee * 0.20;
            $payee1 = array($deduction6, $sum);
            echo  "TAX ON TAXABLE INCOME = ", array_sum($payee1);

        }

        if ($var2>35472 && $var2<=47059) {
            $sum = 5284;
            $payee = $var2 - 35472;
            $deduction7 = $payee * 0.25;
            $payee1 = array($deduction7, $sum);
            echo  "TAX ON TAXABLE INCOME = ", array_sum($payee1);
        }

        if ( $var2>=47060) {
            $sum = 8180;
            $payee = $var2 - 47059;
            $deduction8 = $payee * 0.30;
            $payee1 = array($deduction8, $sum);
            echo "TAX ON TAXABLE INCOME = ", array_sum($payee1);

        }



        echo "<br>";
        echo "<br>";

        //payee

        if ($var2 <= 14350) {
           $payee2 = 0;
           echo "PAYEE = " .$payee2;
        }

        if ($var2 >= 14350) {
             $payee2 = array_sum($payee1) - 1408 ;
        echo "PAYEE = " .$payee2;
        }

       


        echo "<br>";
        echo "<br>";

        /*NHIF CALCULATION*/

        if ($var1<=5999){
            $deduction= 150;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=6000 && $var1<=7999){
            $deduction= 300;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=8000 && $var1<=11999){
            $deduction= 400;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=12000 && $var1<=14999){
            $deduction= 500;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=15000 && $var1<=19999){
            $deduction= 600;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=20000 && $var1<=24999){
            $deduction= 750;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=25000 && $var1<=29999){
            $deduction= 850;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=30000 && $var1<=34999){
            $deduction= 900;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=35000 && $var1<=39999){
            $deduction= 950;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=40000 && $var1<=44999){
            $deduction= 1000;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=45000 && $var1<=49999){
            $deduction= 1100;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=50000 && $var1<=59999){
            $deduction= 1200;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=60000 && $var1<=69999){
            $deduction= 1300;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=70000 && $var1<=79999){
            $deduction= 1400;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=80000 && $var1<=89999){
            $deduction= 1500;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=90000 && $var1<=99999){
            $deduction= 1600;
            echo "NHIF = ".$deduction;
        }
        if ($var1>=100000){
            $deduction= 1700;
            echo "NHIF = ".$deduction;
        }

        echo "<br>";
        echo "<br>";
        /*RELIEF CALCULATION*/

        if ($var1>0){
            $deduction1 = 1408 ;
            echo "RELIEF = " .$deduction1;
        }

        echo "<br>";
        echo "<br>";
        /*NSSF CALCULATION*/

        if ($var1>0){
            $deduction2 = 1080;
            echo "NSSF = " .$deduction2;
        }
        echo "<br>";
        echo "<br>";


        /*total calculation*/

       /* $summ = array($deduction,$deduction1,$deduction2,implode(",",$payee1));*/
        /*array_sum($summ);
        $add=array($summ,$payee1);
        array_sum($add);*/
        /*json_encode($summ);*/
        /*array_sum($summ);*/




        /** @noinspection PhpWrongStringConcatenationInspection */
        @$add = $var2 -  ( $deduction + $deduction1 + implode(',' , $payee1) ) ;       

        //disabling errors
        error_reporting(0);
        $summ = $var2 - ($payee2 + $deduction);
        print "NET PAY = " .$summ;
        echo "<br>";
        echo "<br>";

        /*print "NET PAY = " .$add;*/

       /* $deduction3 = array($deduction,$deduction1);
        echo "TOTAL DEDUCTION = " , array_sum($deduction3);*/
        echo "<br>";
        echo "<br>";


        /*echo "total = " . $total;*/
    }
    ?>

</tr>

        </table>
    <!-- <button class=" btn btn-success btn-block"> <a href="calculate.php?file"  > download </a> </button> -->
    </div>
<!--</div>-->

</body>

</html>



<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'pay');
?>





