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
                        <h4>Sign Up Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-body" id="card-body">
                            <div class="form-group mt-2">
                                <label for="" class="">First Name</label>
                                <input type="text" class="form-control" name="" id="" placeholder="" aria-describedby="helpId">
                                <small id="helpId" class="text-muted">Enter your first name</small>
                            </div>

                            <form action="index.php">
                                <div class="form-group mt-2">
                                    <label for="" class="">Last Name</label>
                                    <input type="text" class="form-control" name="" id="" placeholder="" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Enter your last name</small>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="" class="">Email</label>
                                    <input type="email" class="form-control" name="" id="" placeholder="" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Enter your email address</small>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="" class="">Password</label>
                                    <input type="password" class="form-control" name="" id="" placeholder="" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Enter your own password</small>
                                </div>
                        </div>
                    </div>
                    <div class="card-footer" id="card-footer">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
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