
<?php
  $eid=$_GET['event_id'];
$con=new mysqli('localhost','root','','techmeet');
if(!$con){
    die(mysqli_error($con));
}
//session_start();
 if(isset($_POST['submit'])){
	$ename=$_POST['event_name'];
	$ename1=$_POST['event_name1'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$nop=$_POST['nop'];
	$protocols=$_POST['protocols'];
    $venue=$_POST['venue'];

     $cimg=$_POST['cimg'];


//Evaluation sheet
     $target_dir = "docs/";
     $target_file = $target_dir . basename($_FILES["evsheet"]["name"]);
     $evalname = $_FILES['evsheet']['name'];
     $uploadOkk = 1;

// Check if file is a DOC or PDF file
     $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//     if ($fileType != "doc" && $fileType != "pdf") {
//         echo "Sorry, only DOC and PDF files are allowed.";
//         $uploadOkk = 0;
//     }

     if ($uploadOkk == 0) {
         echo "Sorry, your file was not uploaded.";
         // if everything is ok, try to upload file
     } else {
         if (move_uploaded_file($_FILES["evsheet"]["tmp_name"], $target_file)) {
             echo "The file " . basename($_FILES["evsheet"]["name"]) . " has been uploaded.";
         } else {
             echo "Sorry, there was an error uploading your file.";
         }
     }

//Final score sheet
     $target_dir = "docs/";
     $target_file = $target_dir . basename($_FILES["fsheet"]["name"]);
     $fsheetname = $_FILES['fsheet']['name'];
     $uploadOkk1 = 1;

// Check if file is a DOC or PDF file
     $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//     if ($fileType != "doc" && $fileType != "pdf") {
//         echo "Sorry, only DOC and PDF files are allowed.";
//         $uploadOkk1 = 0;
//     }

     if ($uploadOkk1 == 0) {
         echo "Sorry, your file was not uploaded.";
         // if everything is ok, try to upload file
     } else {
         if (move_uploaded_file($_FILES["fsheet"]["tmp_name"], $target_file)) {
             echo "The file " . basename($_FILES["fsheet"]["name"]) . " has been uploaded.";
         } else {
             echo "Sorry, there was an error uploading your file.";
         }
     }

     //Winners list
     $target_dir = "docs/";
     $target_file = $target_dir . basename($_FILES["winlist"]["name"]);
     $winlist = $_FILES['winlist']['name'];
     $uploadOkk2 = 1;

     // Check if file is a DOC or PDF file
     $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//     if ($fileType != "doc" && $fileType != "pdf") {
//         echo "Sorry, only DOC and PDF files are allowed.";
//         $uploadOkk2 = 0;
//     }

     if ($uploadOkk2 == 0) {
         echo "Sorry, your file was not uploaded.";
         // if everything is ok, try to upload file
     } else {
         if (move_uploaded_file($_FILES["winlist"]["tmp_name"], $target_file)) {
             echo "The file " . basename($_FILES["winlist"]["name"]) . " has been uploaded.";
         } else {
             echo "Sorry, there was an error uploading your file.";
         }
     }


    
	// $file_size =$_FILES['image']['size'];
	// $file_tmp =$_FILES['image']['tmp_name'];
	// $file_type=$_FILES['image']['type'];

	$file_name = $_FILES['image']['name'];

	$target_dir = "C:/xampp/htdocs/techmeet-1/eventimgs/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["image"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// Check if file already exists
if (file_exists($target_file)) {
  $_SESSION['msg']= "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 500000000) {
  $_SESSION['msg']= "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $_SESSION['msg']= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $_SESSION['error']= "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $_SESSION['msg']= "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
  } else {
    $_SESSION['error']= "Sorry, there was an error uploading your file.";
  }
 }

        $sql="select * from events where event_id = $eid";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        if($evalname=='') {
            $evalname = $row['evalsheet'];
        }
        //                echo $evsheet;
        if($fsheetname=='') {
            $fsheetname = $row['fsheet'];
        }
        if($winlist=='') {
            $winlist = $row['winlist'];
        }


        $sql="UPDATE `events` SET `event_name` = '$ename',event_name1='$ename1',date='$date',time='$time',rules='$protocols',partic_no='$nop',cimage='$file_name',evalsheet='$evalname',fsheet='$fsheetname', venue='$venue',winlist='$winlist' WHERE `events`.`event_id` = $eid;";
		$result=mysqli_query($con,$sql);

		if(isset($result)){
            $_SESSION['tmsg']="Event edited successfully";
            header("location:index.php?inc=ecard2.php");
		}

		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
		}
        if(isset($_SESSION['error'])){
			echo $_SESSION['msg'];
		}


//        $sql="UPDATE `events` SET `event_name` = '$ename',event_name1='$ename1',date='$date',time='$time',rules='$protocols',partic_no='$nop',cimage='$file_name',evalsheet='$evalname',fsheet='$fsheetname',winlist='$winlist' WHERE `events`.`event_id` = $eid;";
//		$result=mysqli_query($con,$sql);
//
//		if(isset($result)){
//            $_SESSION['tmsg']="Event edited successfully";
//			header("location:index.php?inc=ecard2.php");
//		}
//
//		if(isset($_SESSION['msg'])){
//			echo $_SESSION['msg'];
//		}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Events</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
	@media (min-width: 1025px) {
.h-custom {
/* height: 100vh !important; */
}
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

.gradient-custom-2 {
/* fallback for old browsers */
/* background: #a1c4fd; */

/* Chrome 10-25, Safari 5.1-6 */
/* background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1)); */

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1)) */
}

.bg-indigo {
background-color: #4835d4;
}
@media (min-width: 992px) {
.card-registration-2 .bg-indigo {
border-top-right-radius: 15px;
border-bottom-right-radius: 15px;
}
}
@media (max-width: 991px) {
.card-registration-2 .bg-indigo {
border-bottom-left-radius: 15px;
border-bottom-right-radius: 15px;
}
}
</style>
</head>
<body class="h-custom gradient-custom-2">
<section class="h-auto h-custom gradient-custom-2">
  <div class="container py-5 h-auto">
	<form action="" method="POST" enctype="multipart/form-data">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">Edit Event</h3>

                  <?php
                  $sql="select * from events where event_id = $eid";
                  $result=mysqli_query($con,$sql);
                  $row=mysqli_fetch_assoc($result);

                    $ename=$row['event_name'];
                    $ename1=$row['event_name1'];
                    $date=$row['date'];
                    $time=$row['time'];
                    $nop=$row['partic_no'];
                    $protocols=$row['rules'];
                    $cimg=$row['cimage'];
                    $venue=$row['venue'];
                  $evsheet=$row['evalsheet'];
                  //                echo $evsheet;
                  $fsheet=$row['fsheet'];
                  $winlist=$row['winlist'];
                    
                    echo '
                    <input type="hidden" value="'.$cimg.'" id="form3Examplev2" class="form-control form-control-lg" name="cimg" />

                    <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" value="'.$ename.'" id="form3Examplev2" class="form-control form-control-lg" name="event_name" />
                        <label class="form-label" for="form3Examplev2">Event Name</label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" value="'.$ename1.'" id="form3Examplev3" class="form-control form-control-lg" name="event_name1"/>
                        <label class="form-label" for="form3Examplev3">Display Name</label>
                      </div>

                    </div>
                  </div>

                  

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="date" value="'.$date.'" id="form3Examplev4" class="form-control form-control-lg" name="date"/>
                      <label class="form-label" for="form3Examplev4">Date</label>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">

                      <div class="form-outline">
                        <input type="text" value="'.$time.'" name="time" id="form3Examplev5" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev5">time (hrs to hrs)</label>
                      </div>

                    </div>
                    
                  </div>

				  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="number" value="'.$nop.'" id="form3Examplev4" class="form-control form-control-lg" name="nop"/>
                      <label class="form-label" for="form3Examplev4">No. of Participants per team</label>
                    </div>
                  </div>
                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" value="'.$venue.'" id="form3Examplev4" class="form-control form-control-lg" name="venue"/>
                      <label class="form-label" for="form3Examplev4">Venue</label>
                    </div>
                  </div>
                  
				   <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="file" id="form3Examplev4" class="form-control form-control-lg" name="evsheet"/>
                      <label class="form-label" for="form3Examplev4">Evaluation Sheet</label>
                    </div>
                  </div>

                    <div class="mb-4 pb-2">
                        <div class="form-outline">
                            <input type="file" id="form3Examplev4" class="form-control form-control-lg" name="fsheet"/>
                            <label class="form-label" for="form3Examplev4">Final Score Sheet</label>
                        </div>
                    </div>

                    <div class="mb-4 pb-2">
                        <div class="form-outline">
                            <input type="file" id="form3Examplev4" class="form-control form-control-lg" name="winlist"/>
                            <label class="form-label" for="form3Examplev4">Winners List</label>
                        </div>
                    </div>
				          

                </div>
              </div>
              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Event Protocols</h3>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <textarea rows="18" cols="20" type="text" name="protocols" id="form3Examplea2" class="form-control form-control-lg" >'.$protocols.'</textarea>
                      <label class="form-label" for="form3Examplea2"></label>
                    </div>
                  </div>

                  <input type="submit" name="submit" value="SAVE" class="btn btn-light btn-lg"
                    data-mdb-ripple-color="dark">
                    '
                  ?>
<!--                   
                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="file" id="form3Examplev4" class="form-control form-control-lg" name="image"/>
                      <label class="form-label" for="form3Examplev4">Cover Image</label>
                    </div>
                  </div> -->
                  <!-- <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea3" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea3">Additional Information</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea4" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea4">Zip Code</label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea5" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea5">Place</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea6" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea6">Country</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea7" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea7">Code +</label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea8" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea8">Phone Number</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea9" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea9">Your Email</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label text-white" for="form2Example3">
                      I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your
                      site.
                    </label>
                  </div> -->

                  

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</form>
  </div>
</section>
</body>
</html>
