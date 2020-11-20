<?php
require 'db.php';
if (isset($_POST['username']))
{
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM admin where username = '".$uname."' and password = '".$password."' limit 1";

    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($result)==1){
        echo "you have login successfully";

    }else{
        "you have entered wrong details";

    }

    header("location:index.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
    <style>
        body{
            background-color: black;
            background-image: url("photos/back2.jpg");
            background-size: 100%;
        }


        .col-sm-5{
            margin-top: 120px;
        }
        .col-sm-5 label{
            color: black;

        }

    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <div class="card" style="margin-top: 60px">
                <div class="card-header text-center">
                    <strong>LOGIN</strong>
                </div>

                <div class="card-body">
                    <form action="login.php" method="post">

                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>

                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" class="form-control" name="password"  required>
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-block">Login</button>


                        <?php
                        if (isset($error))
                            echo $error;

                        ?>
                    </form>

                </div>


            </div>
        </div>
    </div>
</div>
<!--<table class="table">
    <thead>
    <tr>
        <td>admission</td>
        <td>email</td>
        <td>password</td>
    </tr>
    </thead>

    <tbody>
    <?php
/*    require 'db.php';
    $sql = "select * from students ORDER BY DATE";
    $results = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($results))
    {
        extract($row);
        echo "<tr>
                    <td>$admission</td>
                    <td>$email</td>
                    <td>$password</td>
                </tr>";
    }
    */?>
    </tbody>
</table>
-->

</body>
</html>