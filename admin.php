<?php


?>
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

</head>

<body>

<?php
require 'navbar.php';
?>
<br>
<br>
<br>
<div class="container ">
<div class="row justify-content-center">
    <div class="col-sm-8 border">

        <form action="calculate.php" method="get">
                <label>Gross Income</label>:
                <input type="number" name="gross" value="gross">
<br>
            <button type="submit" name="calculate"  value="calculate" class="btn btn-primary">Calculate</button>

            <br>
            <br>
        </form>
<!--            <label>TOTAL</label> <input type="number" value= "" >
-->        </div>
</div>
</div>




<br>
<br>




</body>


</html>
