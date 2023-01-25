<head>
  <!-- <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
  /> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

  <!-- <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
  /> -->
  <!-- <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
  /> -->
  <style>
    body {
      background: #f4f7fd;
      margin-top: 20px;
    }

    .card-margin {
      margin-bottom: 1.875rem;
    }

    .card {
      border: 0;
      box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
      -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
      -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
      -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    }
    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #ffffff;
      background-clip: border-box;
      border: 1px solid #e6e4e9;
      border-radius: 8px;
    }

    .card .card-header.no-border {
      border: 0;
    }
    .card .card-header {
      background: none;
      padding: 0 0.9375rem;
      font-weight: 500;
      display: flex;
      align-items: center;
      min-height: 50px;
    }
    .card-header:first-child {
      border-radius: calc(8px - 1px) calc(8px - 1px) 0 0;
    }

    .widget-49 .widget-49-title-wrapper {
      display: flex;
      align-items: center;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-primary {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-color: #edf1fc;
      width: 4rem;
      height: 4rem;
      border-radius: 50%;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-primary
      .widget-49-date-day {
      color: #4e73e5;
      font-weight: 500;
      font-size: 1.5rem;
      line-height: 1;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-primary
      .widget-49-date-month {
      color: #4e73e5;
      line-height: 1;
      font-size: 1rem;
      text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-secondary {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-color: #fcfcfd;
      width: 4rem;
      height: 4rem;
      border-radius: 50%;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-secondary
      .widget-49-date-day {
      color: #dde1e9;
      font-weight: 500;
      font-size: 1.5rem;
      line-height: 1;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-secondary
      .widget-49-date-month {
      color: #dde1e9;
      line-height: 1;
      font-size: 1rem;
      text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-success {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-color: #e8faf8;
      width: 4rem;
      height: 4rem;
      border-radius: 50%;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-success
      .widget-49-date-day {
      color: #17d1bd;
      font-weight: 500;
      font-size: 1.5rem;
      line-height: 1;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-success
      .widget-49-date-month {
      color: #17d1bd;
      line-height: 1;
      font-size: 1rem;
      text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-info {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-color: #ebf7ff;
      width: 4rem;
      height: 4rem;
      border-radius: 50%;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-info
      .widget-49-date-day {
      color: #36afff;
      font-weight: 500;
      font-size: 1.5rem;
      line-height: 1;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-info
      .widget-49-date-month {
      color: #36afff;
      line-height: 1;
      font-size: 1rem;
      text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-warning {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-color: floralwhite;
      width: 4rem;
      height: 4rem;
      border-radius: 50%;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-warning
      .widget-49-date-day {
      color: #ffc868;
      font-weight: 500;
      font-size: 1.5rem;
      line-height: 1;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-warning
      .widget-49-date-month {
      color: #ffc868;
      line-height: 1;
      font-size: 1rem;
      text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-danger {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-color: #feeeef;
      width: 4rem;
      height: 4rem;
      border-radius: 50%;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-danger
      .widget-49-date-day {
      color: #f95062;
      font-weight: 500;
      font-size: 1.5rem;
      line-height: 1;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-danger
      .widget-49-date-month {
      color: #f95062;
      line-height: 1;
      font-size: 1rem;
      text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-light {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-color: #fefeff;
      width: 4rem;
      height: 4rem;
      border-radius: 50%;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-light
      .widget-49-date-day {
      color: #f7f9fa;
      font-weight: 500;
      font-size: 1.5rem;
      line-height: 1;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-light
      .widget-49-date-month {
      color: #f7f9fa;
      line-height: 1;
      font-size: 1rem;
      text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-dark {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-color: #ebedee;
      width: 4rem;
      height: 4rem;
      border-radius: 50%;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-dark
      .widget-49-date-day {
      color: #394856;
      font-weight: 500;
      font-size: 1.5rem;
      line-height: 1;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-dark
      .widget-49-date-month {
      color: #394856;
      line-height: 1;
      font-size: 1rem;
      text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-base {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-color: #f0fafb;
      width: 4rem;
      height: 4rem;
      border-radius: 50%;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-base
      .widget-49-date-day {
      color: #68cbd7;
      font-weight: 500;
      font-size: 1.5rem;
      line-height: 1;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-date-base
      .widget-49-date-month {
      color: #68cbd7;
      line-height: 1;
      font-size: 1rem;
      text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-meeting-info {
      display: flex;
      flex-direction: column;
      margin-left: 1rem;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-meeting-info
      .widget-49-pro-title {
      color: #3c4142;
      font-size: 14px;
    }

    .widget-49
      .widget-49-title-wrapper
      .widget-49-meeting-info
      .widget-49-meeting-time {
      color: #b1bac5;
      font-size: 13px;
    }

    .widget-49 .widget-49-meeting-points {
      font-weight: 400;
      font-size: 13px;
      margin-top: 0.5rem;
    }

    .widget-49 .widget-49-meeting-points .widget-49-meeting-item {
      display: list-item;
      color: #727686;
    }

    .widget-49 .widget-49-meeting-points .widget-49-meeting-item span {
      margin-left: 0.5rem;
    }

    .widget-49 .widget-49-meeting-action {
      text-align: right;
    }

    .widget-49 .widget-49-meeting-action a {
      text-transform: uppercase;
    }
  </style>
</head>
<div class="container">
  <div class="row">
  <?php
    $sql="Select * from events";
    $result=mysqli_query($con,$sql);
    if($result){
      $cnt=40;
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['event_id'];
          $name=$row['event_name'];
          $name1=$row['event_name1'];
          $date=$row['date'];
          $time=$row['time'];
          $det=$row['details'];
          $rules=$row['rules'];
          $nop=$row['partic_no'];
          $date=explode("-",$row['date']);
          
          $mon = array("01"=>"JAN", "02"=>"FEB", "03"=>"MAR", "04"=>"APR", "05"=>"MAY", "06"=>"JUN", "07"=>"JUL", "08"=>"AUG", "09"=>"SEP", "10"=>"OCT", "11"=>"NOV", "12"=>"DEC");
          
          echo '<div class="col-lg-4">
          <div class="card card-margin">
            <div class="card-header no-border">
              <h5 class="card-title">'.$name1.'</h5>
            </div>
            <div class="card-body pt-0">
              <div class="widget-49">
                <div class="widget-49-title-wrapper">
                  <div class="widget-49-date-primary">
                    <span class="widget-49-date-day">'.$date[2].'</span>
                    <span class="widget-49-date-month">'.$mon[$date[1]].'</span>
                  </div>
                  <div class="widget-49-meeting-info">
                    <span class="widget-49-pro-title"
                      >'.$name.'</span
                    >
                    <span class="widget-49-meeting-time" style="text-align:left;">'.$time.'</span>
                  </div>
                </div>
                <ol class="widget-49-meeting-points" style="text-align:left;">
                  <li class="widget-49-meeting-item">
                    <span>Participants allowed: '.$nop.'</span>
                  </li>
                  <li class="widget-49-meeting-item">
                    <span>Data migration is in scope</span>
                  </li>
                  <li class="widget-49-meeting-item">
                    <span>Session timeout increase to 30 minutes</span>
                  </li>
                </ol>
                <div class="widget-49-meeting-action">
                  <a href="#portfolioModal'.$cnt.'" class="btn btn-sm btn-flash-border-primary"
                    >Details</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>';
        echo '
        <!-- Modal -->
                        <div class="modal fade" id="portfolioModal'.$cnt.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">PROTOCOLS</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <pre class="font-weight-normal" style="text-align:left;">
'.$rules.'
                            </pre>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        ';
                        
                      $cnt=$cnt+1;
        }
      }
?>
    <!-- <div class="col-lg-4">
      <div class="card card-margin">
        <div class="card-header no-border">
          <h5 class="card-title">MOM</h5>
        </div>
        <div class="card-body pt-0">
          <div class="widget-49">
            <div class="widget-49-title-wrapper">
              <div class="widget-49-date-primary">
                <span class="widget-49-date-day">09</span>
                <span class="widget-49-date-month">apr</span>
              </div>
              <div class="widget-49-meeting-info">
                <span class="widget-49-pro-title"
                  >WEB DESIGNING</span
                >
                <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
              </div>
            </div>
            <ol class="widget-49-meeting-points">
              <li class="widget-49-meeting-item">
                <span>Expand module is removed</span>
              </li>
              <li class="widget-49-meeting-item">
                <span>Data migration is in scope</span>
              </li>
              <li class="widget-49-meeting-item">
                <span>Session timeout increase to 30 minutes</span>
              </li>
            </ol>
            <div class="widget-49-meeting-action">
              <a href="#" class="btn btn-sm btn-flash-border-primary"
                >View All</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card card-margin">
        <div class="card-header no-border">
          <h5 class="card-title">MOM</h5>
        </div>
        <div class="card-body pt-0">
          <div class="widget-49">
            <div class="widget-49-title-wrapper">
              <div class="widget-49-date-warning">
                <span class="widget-49-date-day">13</span>
                <span class="widget-49-date-month">apr</span>
              </div>
              <div class="widget-49-meeting-info">
                <span class="widget-49-pro-title">PRO-08235 Lexa Corp.</span>
                <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
              </div>
            </div>
            <ol class="widget-49-meeting-points">
              <li class="widget-49-meeting-item">
                <span>Scheming module is removed</span>
              </li>
              <li class="widget-49-meeting-item">
                <span>App design contract confirmed</span>
              </li>
              <li class="widget-49-meeting-item">
                <span>Client request to send invoice</span>
              </li>
            </ol>
            <div class="widget-49-meeting-action">
              <a href="#" class="btn btn-sm btn-flash-border-warning"
                >View All</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card card-margin">
        <div class="card-header no-border">
          <h5 class="card-title">MOM</h5>
        </div>
        <div class="card-body pt-0">
          <div class="widget-49">
            <div class="widget-49-title-wrapper">
              <div class="widget-49-date-success">
                <span class="widget-49-date-day">22</span>
                <span class="widget-49-date-month">apr</span>
              </div>
              <div class="widget-49-meeting-info">
                <span class="widget-49-pro-title">PRO-027865 Opera module</span>
                <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
              </div>
            </div>
            <ol class="widget-49-meeting-points">
              <li class="widget-49-meeting-item">
                <span>Scope is revised and updated</span>
              </li>
              <li class="widget-49-meeting-item">
                <span>Time-line has been changed</span>
              </li>
              <li class="widget-49-meeting-item">
                <span>Received approval to start wire-frame</span>
              </li>
            </ol>
            <div class="widget-49-meeting-action">
              <a href="#" class="btn btn-sm btn-flash-border-success"
                >View All</a
              >
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>
