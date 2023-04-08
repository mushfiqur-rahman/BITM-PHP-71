<?php
/**
 * Created by PhpStorm.
 * User: mushf
 * Date: 27-Dec-17
 * Time: 11:43 PM
 */
$result="";

require_once "PlayNumber.php";

$t=new PlayNumber();
$result = $t->playNumber();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home Work | Day 17</title>
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    </head>
    <body>
        <div class="jumbotron">
            <div class="card text-center m-auto">
                <div class="card-body ">
                    <h4 class="card-title text-uppercase text-center">Find Odd or Even Number</h4>
                    <br><br>
                    <form method="post" action="" class="form-group">
                        <table>
                            <tr>
                                <th>First Number</th>
                                <td><input type="text" name="first_numb" value="<?php if (isset($_POST['first_number'])) echo $_POST['first_number']?>" class="form-control"></td>
                            </tr>

                            <tr>
                                <th>Second Number</th>
                                <td><input type="text" name="second_numb" value="<?php if (isset($_POST['second_number'])) echo $_POST['second_number']?>"  class="form-control"></td>
                            </tr>

                            <tr>
                                <th></th>
                                <td>
                                    <input type="radio" name="check" value="odd">Odd
                                    <input type="radio" name="check" value="even">Even
                                </td>
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
