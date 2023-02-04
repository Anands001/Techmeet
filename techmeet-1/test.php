<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function fun(){
            <?php
            // include 'dbconnect.php';
            // $sql="Select * from events";
            // $result=mysqli_query($con,$sql);
            // if($result){
            
            //     while($row=mysqli_fetch_assoc($result)){
            //       $id=$row['event_id'];
            //       $name=$row['event_name'];
            //       echo "$id $name";
            //     }
            // }
            ?>
        }
    </script>
</head>
<body>
    <button type="button" onclick="fun()">Submit</button>
</body>
</html> -->
<!-- 
<script type="text/javascript">
var width=screen.width;
</script>
<?php
    //  echo $myPhpVar= "<script>document.writeln(width);</script>";
?> -->

<?php
include 'dbconnect.php';
$date = new DateTime();
$date->modify('-6 days');
$data=array();
for ($i = 0; $i < 7; $i++) {
    echo $date->format('Y-m-d') . "\n";
    $date1=$date->format('Y-m-d');
    $sql="SELECT COUNT(std_id) as count from user WHERE DATE(user.created_at)='$date1';";
    $result=mysqli_query($con,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        $c=$row['count'];
       
        array_push($data, array("$date1"=>"$c"));
    }

    $date->modify('+1 day');
}
var_dump($data);
?>