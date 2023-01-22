<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function fun(){
            <?php
            include 'dbconnect.php';
            $sql="Select * from events";
            $result=mysqli_query($con,$sql);
            if($result){
            
                while($row=mysqli_fetch_assoc($result)){
                  $id=$row['event_id'];
                  $name=$row['event_name'];
                  echo "$id $name";
                }
            }
            ?>
        }
    </script>
</head>
<body>
    <button type="button" onclick="fun()">Submit</button>
</body>
</html>