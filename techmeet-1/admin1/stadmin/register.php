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
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- MDB -->
    <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
    ></script>
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

<?php
//$_SESSION['rmsg']='Registered';
session_start();
if(isset($_SESSION['rmsg'])){
    ?>

                            <section class="vh-100" style="background-color: #eee;">
                                <div class="container h-100">
                                    <div class="row d-flex justify-content-center align-items-center h-100">
                                        <div class="col-lg-12 col-xl-11">
                                            <div class="card" style="border-radius: 25px;">
                                                <div class="card-body p-md-5">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                                            <p class="text-center h5 mb-5 mx-1 mx-md-4 mt-4">You Have registered successfully.You will receive a mail once your registration has been accepted</p>



                                                        </div>
                                                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                                            <img src="images/regimg.jpeg"
                                                                 class="img-fluid" alt="Sample image">

                                                        </div>
                                                        <p class="small fw-bold mb-2 pt-1 mb-0">Already have an account? <a href="login.php"
                                                                                                                            class="link-info">Login</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

<?php
    unset($_SESSION['rmsg']);
}else{ ?>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <form class="mx-1 mx-md-4" method="post" action="sreg.php">

                                    <div class="d-flex flex-row align-items-center mb-4">
<!--                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>-->
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example1c" name="name" class="form-control" required/>
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
<!--                                        <i class="fas fa-book fa-lg me-3 fa-fw"></i>-->
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example1z" name="designation" class="form-control" required/>
                                            <label class="form-label" for="form3Example1z">Designation</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
<!--                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>-->
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="form3Example3c" name="email" class="form-control" required/>
                                            <label class="form-label" for="form3Example3c">Your Email</label>
                                        </div>
                                    </div>

<!--                                    <div class="d-flex flex-row align-items-center mb-4">-->
                                        <!--                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>-->
<!--                                        <div class="form-outline flex-fill mb-0">-->
<!--                                            <input type="text" id="form3Example3c" name="phone" class="form-control" pattern="/(7|8|9)\d{9}/" required/>-->
<!--                                            <label class="form-label" for="form3Example3c">Phone no:</label>-->
<!--                                        </div>-->
<!--                                    </div>-->

                                    <div class="d-flex flex-row align-items-center mb-4">
<!--                                        <i class="fas fa-user-alt fa-lg me-3 fa-fw"></i>-->
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example8c" name="username" class="form-control" required/>
                                            <label class="form-label" for="form3Example8c">username</label>
                                        </div>
                                    </div>

                                    <div class=" align-items-center mb-4">
<!--                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>-->
                                        <div class="form-outline flex-fill">
                                            <input type="password" id="form3Example4c" name="password" class="form-control" minlength="6" onkeyup="validation()" required/>
                                            <label class="form-label" for="form3Example4c">Password</label>
                                            <div id="errormsg" class="invalid-feedback">Password must be of length 6</div>
                                            <div id="errormsg" class="valid-feedback" aria-required="true">Looks good...!</div>
                                        </div>
                                    </div>

                                    <div class=" align-items-center mb-4 mt-2">
<!--                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>-->
                                        <div class="form-outline">
                                            <input type="password" id="form3Example4cd" class="form-control" oninput="passcheck()" required/>
                                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                            <div id="errormsg" class="invalid-feedback">Password and repeat password must be same</div>
                                            <div id="errormsg" class="valid-feedback" aria-required="true">Looks good...!</div>

                                        </div>


                                    </div>



                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required/>
                                        <label class="form-check-label" for="form2Example3">
                                            I agree all statements in <a href="#!">Terms of service</a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" id='sbmt'class="btn btn-primary btn-lg" >Register</button>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="images/regimg.jpeg"
                                     class="img-fluid" alt="Sample image">

                            </div>
                            <p class="small fw-bold mb-2 pt-1 mb-0">Already have an account? <a href="login.php"
                                                                                                class="link-info">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                            <?php } ?>
<script src="../js/mdb.min.js"></script>
<!--<script src="../js/bootstrap.bundle.js"></script>-->
<script>
    'use strict'
    const passcheck = () => {
        console.log('helo')
        const pass = document.getElementById('form3Example4c').value;
        const  reppass = document.getElementById('form3Example4cd').value;
        const feedback = document.getElementById('form3Example4cd');
        console.log(pass,reppass);
        if(pass !== reppass)
        {
            event.preventDefault();
            document.getElementById('form3Example4cd').focus();
            // document.getElementById('errormsg').textContent = 'Password and repeat password must be same';
            feedback.classList ='form-control is-invalid';
            document.getElementById('sbmt').disabled = true;
        }
        else
        {
            document.getElementById('errormsg').textContent = '';
            feedback.classList ='form-control is-valid';
            document.getElementById('sbmt').disabled = false;

        }
        if(reppass === ''){
            console.log('if')
            feedback.classList ='form-control';
            document.getElementById('sbmt').disabled = true;


        }
    };

    const validation = () => {
        const pass = document.getElementById('form3Example4c').value;
        const ele = document.getElementById('form3Example4c');
        if(pass.length <=6){
            document.getElementById('sbmt').disabled = true;
            ele.classList = 'form-control is-invalid';
        }else{
            ele.classList ='form-control is-valid';
            document.getElementById('sbmt').disabled = false;

        }
        if(pass === ''){
            ele.classList ='form-control';
            document.getElementById('sbmt').disabled = true;


        }
    }


</script>

</body>
</html>
