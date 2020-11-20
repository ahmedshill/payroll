
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
           /* background-image: url("photos/back3.png");
            background-repeat: no-repeat;
            background-position: initial;
            background-size: cover;*/
            background-color:  #b1dfbb;

        }
        .table{
            border: solid;
        }


    </style>

</head>
<body>



<?php
require 'navbar.php';

?>

<!-- Modal for ADD EMPOLOYEES -->
<!--<div class="modal fade" id="employeeaddmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
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
                    <button type="submit" name="insertdata" class="btn btn-primary btn-block employeeaddmodel">Save Data</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
--><!-- End of ADD EMPLOYEES-->
<br>


<!-- MODAL FOR EDITING EMPLOYEES-->
<!--<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="updatedata.php" method="post">
                <div class="modal-body">
                    <input type="hidden" name="update_id" id="update_id">
                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" class="form-control" name="Fname" id="Fname" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="Lname" id="Lname" required>
                    </div>
                    <div class="form-group">
                        <label>Gross salary</label><br>
                        <input type="number" class="form-control" name="Gsalary" id="Gsalary" required>
                    </div>
                    <div class="form-group">
                        <label>total deductions</label><br>
                        <label>medicare taxes:</label>
                        <input type="number" class="form-control" name="Mtaxes" id="Mtaxes" required>
                        <label>local taxes:</label>
                        <input type="number" class="form-control" name="ltaxes" id="ltaxes" required>
                        <label>federal income taxes withholding:</label>
                        <input type="number" class="form-control" name="Ftaxes" id="Ftaxes" required>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="updatedata" class="btn btn-primary btn-block editbtn">Update Data</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
-->
<!-- END OF EDDITING EMPLOYEES-->


<div class="container">
    <div class="masthead">
        <h3>
            <b>Payroll Management System</b>

    </div><br>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>PAYROLL MANAGEMENT</h1>
        <p class="lead">This payroll management system has improvised all the basic exercise to manage the salary of the employees.</p>
    </div>


    <!--sending email-->

   <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="send_mail.php" method="post">
                    <div class="form-group">
                        <label>TO:</label>
                        <input type="email" class="form-control" name="mail_to" required>
                    </div>
                    <div class="form-group">
                        <label>SUBJECT:</label>
                        <input type="text" class="form-control" name="mail_sub" required>
                    </div>
                    <div class="form-group">
                        <label>MESSAGE:</label>
                        <input type="text" class="form-control" name="mail_msg" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="send_email">send email</button>

                </form>
            </div>
        </div>
    </div>-->

    <!-- Button trigger modal -->
<!--    <div class="jumbotron">
        <div class="card">
            <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#employeeaddmodel">
            Add Details of Employees
        </button>
            </div>
        </div>
    </div>
-->

<!--    <div class="container">


            <table class="table  table-dark" rules="all">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gross salary</th>
                    <th>medicare taxes</th>
                    <th>local taxes</th>
                    <th>federal taxes</th>
                    <th colspan="2"> Action </th>
                </tr>
                </thead>
                <tbody>

                <?php
/*                require 'insertform.php'
                */?>

                </tbody>

            </table>

        </div>
-->    </div>


<!--<script>

    $(document).ready(function () {
        $('.editbtn').on('click', function () {
            $(#editmodal).modal('show');

        });

    });

</script>
-->
<!--<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/docs.min.js"></script>
<script src="assets/js/search.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="assets/js/dataTables.min.js"></script>-->
</body>















</html>

