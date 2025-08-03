<?php 
    session_start(); 
?>

<?php 
    include_once('inc/conn.php'); 
?>

<?php
if (isset($_POST['submit'])) {

    // Declaring variables and assign emty values
    $email = "";
    $password = "";
    $msg = "";

    $email = input_varify($_POST['email']);
    $password = input_varify($_POST['password']);

    $query1 = "SELECT * FROM TBL_User WHERE Email = '{$email}' AND Pwd = '{$password}' Limit 1";

    $showResult = mysqli_query($conn, $query1);

    if ($showResult) {
        if (mysqli_num_rows($showResult) == 1) {
            $user = mysqli_fetch_assoc($showResult);
            $_SESSION['user_Fname'] = $user['Fname'];
            $_SESSION['last_Lname'] = $user['Lname'];

            header("Location: index.php");
        } else {
            $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Sorry!</strong> Please check your email or password. 
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
    }
}

function input_varify($data)
{
    //Remove emty space from user input
    $data = trim($data);

    //Remove back slash from user input
    $data = stripslashes($data);

    //Convert special chars to html entities
    $data = htmlspecialchars($data);

    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
    <!-- Bootstrap CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Css link -->
    <link rel="stylesheet" href="css/sign_up.css">
</head>

<body>
    <?php include_once('inc/navbar.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card  mt-4" id="card">
                    <div class="card-header" id="card-header">
                        <h4>Sign In Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-body" id="card-body">
                            <form action="sign_in.php" method="post" autocomplete="off">
                                <?php if (!empty($msg)) {
                                    echo $msg;
                                } ?>

                                <div class="form-group mt-2">
                                    <label for="" class="">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Enter your email address</small>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="" class="">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Enter your own password</small>
                                </div>
                        </div>
                    </div>
                    <div class="card-footer" id="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Js CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>