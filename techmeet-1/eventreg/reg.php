<?php
    $revents=$_POST['check'];
    $name=$_POST['name'];
    $regno=$_POST['regno'];
    var_dump($name);
    var_dump($regno);
    var_dump($revents);

    

    // var_dump($revents);
    // echo "<hr>";
    // var_dump(count($events[0]));

    // var_dump($name);
    // echo '0,0='.$revents[1][3].'-';
    include 'dbconnect.php';
    $sql="Select count(event_id) as count from events";
    $result=mysqli_query($con,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        $c=$row['count'];
    }
// using session to fetch clg_name and dept
    session_start();
    if(isset($_SESSION['clg_name'])&&isset($_SESSION['dept'])){
        $clg_name=$_SESSION['clg_name'];
        $dept=$_SESSION['dept'];
    }

    for($i=0;$i<7;$i++){
        if(isset($name[$i])&&!empty($name[$i])){
            $query="INSERT INTO `user` (`std_id`, `std_name`, `std_regno`, `mobile`, `email`, `clg_name`, `dept`) VALUES (NULL, '$name[$i]', '$regno[$i]', '', '', '$clg_name', '$dept')";
            $result=mysqli_query($con,$query);
            $query1="SELECT std_id from user where std_regno='$regno[$i]'";
            $result1=mysqli_query($con,$query1);
            if($result1){
                $row1=mysqli_fetch_assoc($result1);
                $id=$row1['std_id'];
            }
        
            for($j=0;$j<$c;$j++){
                if(isset($revents[$i][$j])){
                    echo 'id='.$id;
                    $eid=$revents[$i][$j];
                    echo 'eid='.$eid;
                    $isql="INSERT INTO `manage_events` (`std_id`, `event_id`) VALUES ('$id', '$eid')";
                    $result2=mysqli_query($con,$isql);
                    
                }
                // echo "<hr>";
            }
        }
    }
    
    // for ($x = 0; $x<count($revents); $x++) {
    //     //  $n=0;
    //     echo "x=",$x;
    //     for ($y = 0; $y < count($revents[$x]); $y++) {
    //         echo "<hr>";
    //         echo "y=",$y;
    //         if(isset($revents[$x][$y])){
    //             echo "y1=",$y;
    //             echo $revents[$x][$y];
    //         }
            
    //     // $var2++;
    //     }
    //     // $n++;
    //   }


  
    
//     session_start();
//     if(isset($_SESSION['err'])){
//         echo $_SESSION['err'];
//     }
//

header("Location:success.php?clg_name=$clg_name&dept=$dept");
?>

