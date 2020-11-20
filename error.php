<?php
/*  if (count($errors) > 0) : */?><!--
    <div class="error">
        <?php /*foreach ($errors as $error) : */?>
            <p><?php /*echo $error */?></p>
        <?php /*endforeach */?>
    </div>
--><?php /* endif */?>
<!--    for edit button-->

<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editmodal">
    Edit Details of Employees

</button>
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Employees data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertform.php" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" class="form-control" name="Fname" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="Lname" required>
                    </div>
                    <div class="form-group">
                        <label>Gross salary</label><br>
                        <input type="number" class="form-control" name="Gsalary" required>
                    </div>
                    <div class="form-group">
                        <label>total deductions</label><br>
                        <label>medicare taxes:</label>
                        <input type="number" class="form-control" name="Mtaxes" required>
                        <label>local taxes:</label>
                        <input type="number" class="form-control" name="ltaxes" required>
                        <label>federal income taxes withholding:</label>
                        <input type="number" class="form-control" name="Ftaxes" required>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="insertdata" class="btn btn-primary btn-block editmodal">Save Data</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
-->

<!--end of modal for edit-->

/*payee*/
/*$deduction1 = 'var4';
$deduction2 = 'var5';
$deduction3 = 'var6';
$payee = 'var3';
$deduction = 'var2';
$var1 = $_GET ['gross'];


if ($var1<=12298)
{
$deduction1=  0.1*$var1;

}
if ($var1<=23885 && $var1>12298){
$payee = $var1 - 12298 ;
$deduction2 = 0.15*$payee;
$deduction = array($deduction1, $deduction2);
print_r(array_sum($deduction));

}
if ($var1<=35472 && $var1>23885 )
{
$deduction3 =   0.20*$var1;
}

elseif ($var1<=47059)
{if ($var1>35472){
$payee=$var1-35472;
$deduction= 0.25*$payee;
}
$payee=$var1-354672;
$deduction= 0.25*$payee;
}
elseif ($var1>=47059)
{
$payee= $var1-47059;
$deduction= 0.3*$payee;
}else{
"wrong input";
}
/*$deduction=$deduction+$payee;*/
/* if ($var1<=12298){
echo "$deduction1";
}
if ($var1>12299 && $var1<=23885){
echo "$deduction1 + $deduction2";
}*/



/*if ($var1<=12298)
{
$total = $var1-$deduction1 ;
echo "total = " . $total;
echo "<br>";
echo "deduction = ".$deduction1;
}
if ($var1<=23885 && $var1>12298){
$total = $var1-$deduction ;
echo "total = " . $total;
echo "<br>";
echo "deduction = ".$deduction;
}
if ($var1<=35472 && $var1>23885 ){
$total = $var1-$deduction3 ;
echo "total = " . $total;
echo "<br>";
echo "deduction = ".$deduction3;
}*/

