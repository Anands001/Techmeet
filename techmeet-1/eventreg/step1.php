<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .gradient-custom-3 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
</head>
<?php
include 'dbconnect.php';
?>
<?php
if(isset($_POST['clgname'])){
    $clg_name=$_POST['clgname'];
    $dept=$_POST['dept'];
    echo $clg_name;
    echo $dept;
    $sql2="SELECT COUNT(std_id) as count from user WHERE UPPER(clg_name)=UPPER('$clg_name') AND UPPER(dept)=UPPER('$dept')";
    $result2=mysqli_query($con,$sql2);
    if($result2){
        $row2=mysqli_fetch_assoc($result2);
        $count=$row2['count'];
        }
    echo $count;
    if($count>0){
        
        echo '<script>
        alert("'.$clg_name,$dept.' has already been registered,If not contact us..");
        </script>';        
    }else{
        session_start();
        $_SESSION['clg_name']=$clg_name;
        $_SESSION['dept']=$dept;
        header("Location:/techmeet-1/eventreg/register.php");       
    }
}
?>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Register</h2>

              <form action="" method="POST">

                <div class="form-outline mb-4">
                <!-- <label class="form-label display-6" for="form3Example3cg">College:</label> -->
                <h2 class="text-uppercase mb-1 text-muted">College:</h2>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="clgname">
                <option disabled="disabled" selected="selected">Choose College</option>

                <?php
                    $sql1="Select * from college";
                    $result1=mysqli_query($con,$sql1);
                    if($result1){
                        while($row1=mysqli_fetch_assoc($result1)){
                            $cname=$row1['clg_name'];                                                    
                                echo '<option>'.$cname.'</option>';
                            }
                    }
                ?>                    
                    
                </select>
                </div>
                <div class="form-outline display-6 mb-4">
                <!-- <label class="form-label" for="form3Example3cg">Department:</label> -->
                <h2 class="text-uppercase mb-1 text-muted">Department:</h2>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="dept">
                <option disabled="disabled" selected="selected">Choose Department</option>
                <?php
                        $sql2="Select * from department";
                        $result2=mysqli_query($con,$sql2);
                        if($result2){
                            while($row2=mysqli_fetch_assoc($result2)){
                            $dname=$row2['dept_name'];                                                    
                            echo '<option>'.$dname.'</option>';
                            }
                        }
                ?>
                </select>
                </div>

                <!-- <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div> -->
                <!-- <div class="form-outline mb-4">
                <select class="selectpicker" multiple data-live-search="true">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                </select>
                </div> -->

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <!-- <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p> -->

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script>$('.selectpicker').selectpicker();
</script>
</body>
</html>
