<?php
    require_once "../vendor/autoload.php";
    $login = new App\classes\Login();

    $message='';

    if (isset($_POST['btn'])){
        $message = $login->adminLoginCheck($_POST);
    }
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 200px">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <div class="card">
                    <div class="card-header d-flex ">
                        <h2>Admin Panel</h2>
                    </div>
                    <div class="card-body">
                        <h3><?php echo $message;?></h3>
                        <form method="post">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label" >Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label" >Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword3"
                                           placeholder="Password" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success btn-block" name="btn">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>