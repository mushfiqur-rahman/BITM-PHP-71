<?php
/**
 * Created by PhpStorm.
 * User: mushf
 * Date: 28-Dec-17
 * Time: 12:43 AM
 */
$result='';



?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Number|Print</title>
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    </head>
    <body>
    <div class="jumbotron">
        <div class="card m-auto">
            <div class="card-body ">
                <h4 class="card-title text-danger text-uppercase text-center">Number Print</h4>
                <br><br>
                <form method="post" action="" class="form-group">
                    <table>
                        <tr>
                            <th>First Number &nbsp;&nbsp;</th>
                            <td><input type="text" name="first_numb" class="form-control"></td>
                        </tr>

                        <tr>
                            <th>Second Number&nbsp;&nbsp;</th>
                            <td><input type="text" name="second_numb" class="form-control"></td>
                        </tr>

                        <tr>
                            <th>Result</th>
                            <td><textarea name="" class="form-control"><?php echo $result;?></textarea></td>
                        </tr>

                        <tr>
                            <th></th><br>
                            <td><input type="submit" name="btn" class="form-control btn-success"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>


    <script src="asset/js/jquery-3.2.1.min.js"></script>
    <script src="asset/js/popper.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    </body>
</html>
