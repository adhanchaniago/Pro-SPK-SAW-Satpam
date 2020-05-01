<?php
include 'assets/model/Db.php';
$db = new Db();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $db->Login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login</title>
    <?php include 'components/head.php' ?>

</head>

<body class="bg-dark">

    <div class="container">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <form method="POST">
                            <h2 class="form-signin-heading">Please sign in</h2>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>

                            <button class="btn btn-lg btn-primary" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div> <!-- /container -->

    <?php include 'components/scripts.php' ?>
</body>

</html>