<?php
    $revents=$_POST['check'];
    $name=$_POST['name'];
    $revents1=$_POST['check[3][0]'];
    echo $revents1;

    

    var_dump($revents);
    echo "<hr>";
    // var_dump(count($events[0]));

    // var_dump($name);

    
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


    for($i=0;$i<count($revents);$i++){
        for($j=0;$j<count($revents[$i]);$j++){
            
        }
    }
?>

