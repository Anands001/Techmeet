<?php

?>
<!doctype html>
<html>
<head>
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
            rel="stylesheet"
            href="../css/bootstrap.min.css"
    />

    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
    ></script>
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>
<body>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="images/loginimg.jpeg"
                     class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="post" action="log.php">
<!--                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">-->
<!--                                <p class="lead fw-normal mb-0 me-3">Sign in with</p>-->
<!--                                <button type="button" class="btn btn-primary btn-floating mx-1">-->
<!--                                    <i class="fab fa-facebook-f"></i>-->
<!--                                </button>-->
<!---->
<!--                                <button type="button" class="btn btn-primary btn-floating mx-1">-->
<!--                                    <i class="fab fa-twitter"></i>-->
<!--                                </button>-->
<!---->
<!--                                <button type="button" class="btn btn-primary btn-floating mx-1">-->
<!--                                    <i class="fab fa-linkedin-in"></i>-->
<!--                        </button>-->
<!--                    </div>-->

<!--                    <div class="divider d-flex align-items-center my-4">-->
<!--                        <p class="text-center fw-bold mx-3 mb-0">Or</p>-->
<!--                    </div>-->
                    <?php
                    session_start();
                    if(isset($_SESSION['logmsg'])){
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Alert!</strong> Username or password is incorrect
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                        unset($_SESSION['logmsg']);
                    }
                    ?>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="username" id="form3Example3" class="form-control form-control-lg"
                               placeholder="Enter a username" />
                        <label class="form-label" for="form3Example3">Username</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                               placeholder="Enter password" />
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">

                        </div>
<!--                        <a href="#!" class="text-body">Forgot password?</a>-->
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <input type="submit" name="submit" value="login" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                                                                                          class="link-danger">Register</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
        </div>
        <!-- Copyright -->

        <!-- Right -->
<!--        <div>-->
<!--            <a href="#!" class="text-white me-4">-->
<!--                <i class="fab fa-facebook-f"></i>-->
<!--            </a>-->
<!--            <a href="#!" class="text-white me-4">-->
<!--                <i class="fab fa-twitter"></i>-->
<!--            </a>-->
<!--            <a href="#!" class="text-white me-4">-->
<!--                <i class="fab fa-google"></i>-->
<!--            </a>-->
<!--            <a href="#!" class="text-white">-->
<!--                <i class="fab fa-linkedin-in"></i>-->
<!--            </a>-->
<!--        </div>-->
        <!-- Right -->
    </div>
</section>
<script rel="text/javascript" src="../js/bootstrap.bundle.js"></script>
<script rel="text/javascript" src="../js/mdb.min.js"></script>

</body>
</html>


