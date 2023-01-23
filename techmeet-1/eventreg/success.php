<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('partlist'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        }
    </script>
    <script type="text/javascript" src="jspdf.debug.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<body class="container">
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    Registered Successfully
  </div>
</div>                  
<input type="button" id="btnExport" value="Export" onclick="Export()" />

<!-- <input type="button" id="btnExport" value="Export" /> -->

    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#partlist')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("cutomer-details.pdf");
                }
            });
        });
    </script>
<?php
include 'dbconnect.php';

    $clgname=$_GET['clg_name'];
    $dept=$_GET['dept'];

    
    $sql="Select count(event_id) as count from events";
    $result=mysqli_query($con,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        $c=$row['count'];
    }
?>
<h2 class="text-uppercase mb-1 text-muted">College:</h2>
<table class="table" id="partlist">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Reg no</th>
    </tr>
  </thead>
<tbody>
<?php
include 'dbconnect.php';

$sql="select event_id from events";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $eid=$row['event_id'];
        $sql1="select user.std_name,user.std_regno,events.event_name from user JOIN (manage_events JOIN events USING(event_id)) USING(std_id) WHERE events.event_id=$eid AND UPPER(user.clg_name)=UPPER('st.xaviers college') AND UPPER(user.dept)=UPPER('bca');";
        $sql2="select COUNT(user.std_name) from user JOIN (manage_events JOIN events USING(event_id)) USING(std_id) WHERE events.event_id=1 AND UPPER(user.clg_name)=UPPER('st.xaviers college') AND UPPER(user.dept)=UPPER('bca');";
        $result1=mysqli_query($con,$sql1);
        if($result1){
            while($row1=mysqli_fetch_assoc($result1)){
                $name=$row1['std_name'];
                $regno=$row1['std_regno'];
                echo '
                    <tr>
                    <th rowspan="2">Name</th>
                    <td>555-1234</td>
                    </tr>
                    <tr>
                    <td>555-8745</td>
                    </tr>
                    ';
            }
        }
    }
}
    
?>
  </tbody>
</table>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</body>
</html