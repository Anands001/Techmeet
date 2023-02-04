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




    </head>
<body>
<input type="button" id="btnExport" value="Export" onclick="Export()" />

<input type="button" id="btnExport" value="Export" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
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
<table class="table" id="partlist">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Reg no</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Clg Name</th>
      <th scope="col">Dept</th>
      <th scope="col">Event Name</th>
    </tr>
  </thead>
<tbody>
<?php
include 'dbconnect.php';

$sql="select user.std_name,user.std_regno,user.mobile,user.email,user.clg_name,user.dept,events.event_name from user JOIN (manage_events JOIN events USING(event_id)) USING(std_id) WHERE events.event_id=1;";
$result=mysqli_query($con,$sql);
                     if($result){
                         while($row=mysqli_fetch_assoc($result)){
                             $name=$row['std_name'];
                             $regno=$row['std_regno'];
                             $mobile=$row['mobile'];
                             $email=$row['email'];
                             $clgname=$row['clg_name'];
                             $dept=$row['dept'];
                             $eventname=$row['event_name'];
                            echo '<tr>
                            
                            <td>'.$name.'</td>
                            <td>'.$regno.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$clgname.'</td>
                            <td>'.$dept.'</td>
                            <td>'.$eventname.'</td>
                        </tr>';
                         }
                        }
?>
  </tbody>
</table>
</body>
</html