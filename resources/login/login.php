<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../../public/assets/fonts/fontawesome-all.min.css">

</head>

<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image"
                                 style="background-image: url(&quot;../../public/assets/img/dogs/young-fitness-man.jpg&quot;);"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Welcome Back!</h4>
                                </div>
                                <form class="user" action="login" method="post">
                                    <div class="form-group"><input class="form-control form-control-user" type="email"
                                                                   id="exampleInputEmail" aria-describedby="emailHelp"
                                                                   placeholder="Enter Email Address..." name="email">
                                    </div>
                                    <div class="form-group"><input class="form-control form-control-user"
                                                                   type="password" id="exampleInputPassword"
                                                                   placeholder="Password" name="password"></div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">


                                            <span style="color:red">
                                                <?php

                                                if (isset($_SESSION['error'])){
                                                    echo $_SESSION['error'];
                                                    session_unset();
                                                    session_destroy();

                                                }
                                                if (isset($_SESSION['isEmpty'])) {
                                                    echo $_SESSION['isEmpty'];

                                                        session_unset();
                                                        session_destroy();

                                                }


                                                ?>
                                             </span>


                                        </div>
                                    </div>
                                    <input class="btn btn-primary btn-block text-white btn-user" type="submit"
                                           value="Login">
                                    <hr>
                                    <a href="../register/index"
                                       class="btn btn-primary btn-block text-white btn-google btn-user" role="button"><i
                                                class="fab fa-google"></i>&nbsp;register </a><a
                                            class="btn btn-primary btn-block text-white btn-facebook btn-user"
                                            role="button"><i class="fab fa-facebook-f"></i>&nbsp; Login with
                                        Facebook</a>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../public/js/jquery.min.js"></script>
<script src="../../public/js/bootstrap.min.js"></script>
<script src="../../public/js/chart.min.js"></script>
<script src="../../public/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="../../public/js/theme.js"></script>
</body>

</html>';
