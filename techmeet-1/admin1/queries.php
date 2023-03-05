<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{margin-top:20px;
            background:#eee;
        }

        .senden-img{
            width:50px;
            height:50px;
        }

        .btn-compose-email {
            padding: 10px 0px;
            margin-bottom: 20px;
        }

        .btn-danger {
            background-color: #E9573F;
            border-color: #E9573F;
            color: white;
        }

        .panel-teal .panel-heading {
            background-color: #37BC9B;
            border: 1px solid #36b898;
            color: white;
        }

        .panel .panel-heading {
            padding: 5px;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
            border-bottom: 1px solid #DDD;
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
        }

        .panel .panel-heading .panel-title {
            padding: 10px;
            font-size: 17px;
        }

        form .form-group {
            position: relative;
            margin-left: 0px !important;
            margin-right: 0px !important;
        }

        .inner-all {
            padding: 10px;
        }

        /* ========================================================================
         * MAIL
         * ======================================================================== */
        .nav-email > li:first-child + li:active {
            margin-top: 0px;
        }
        .nav-email > li + li {
            margin-top: 1px;
        }
        .nav-email li {
            background-color: white;
        }
        .nav-email li.active {
            background-color: transparent;
        }
        .nav-email li.active .label {
            background-color: white;
            color: black;
        }
        .nav-email li a {
            color: black;
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
        }
        .nav-email li a:hover {
            background-color: #EEEEEE;
        }
        .nav-email li a i {
            margin-right: 5px;
        }
        .nav-email li a .label {
            margin-top: -1px;
        }

        .table-email tr:first-child td {
            border-top: none;
        }
        .table-email tr td {
            vertical-align: top !important;
        }
        .table-email tr td:first-child, .table-email tr td:nth-child(2) {
            text-align: center;
            width: 35px;
        }
        .table-email tr.unread, .table-email tr.selected {
            background-color: #EEEEEE;
        }
        .table-email .media {
            margin: 0px;
            padding: 0px;
            position: relative;
        }
        .table-email .media h4 {
            margin: 0px;
            font-size: 14px;
            line-height: normal;
        }
        .table-email .media-object {
            width: 35px;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
        }
        .table-email .media-meta, .table-email .media-attach {
            font-size: 11px;
            color: #999;
            position: absolute;
            right: 10px;
        }
        .table-email .media-meta {
            top: 0px;
        }
        .table-email .media-attach {
            bottom: 0px;
        }
        .table-email .media-attach i {
            margin-right: 10px;
        }
        .table-email .media-attach i:last-child {
            margin-right: 0px;
        }
        .table-email .email-summary {
            margin: 0px 110px 0px 0px;
        }
        .table-email .email-summary strong {
            color: #333;
        }
        .table-email .email-summary span {
            line-height: 1;
        }
        .table-email .email-summary span.label {
            padding: 1px 5px 2px;
        }
        .table-email .ckbox {
            line-height: 0px;
            margin-left: 8px;
        }
        .table-email .star {
            margin-left: 6px;
        }
        .table-email .star.star-checked i {
            color: goldenrod;
        }

        .nav-email-subtitle {
            font-size: 15px;
            text-transform: uppercase;
            color: #333;
            margin-bottom: 15px;
            margin-top: 30px;
        }

        .compose-mail {
            position: relative;
            padding: 15px;
        }
        .compose-mail textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #DDD;
        }

        .view-mail {
            padding: 10px;
            font-weight: 300;
        }

        .attachment-mail {
            padding: 10px;
            width: 100%;
            display: inline-block;
            margin: 20px 0px;
            border-top: 1px solid #EFF2F7;
        }
        .attachment-mail p {
            margin-bottom: 0px;
        }
        .attachment-mail a {
            color: #32323A;
        }
        .attachment-mail ul {
            padding: 0px;
        }
        .attachment-mail ul li {
            float: left;
            width: 200px;
            margin-right: 15px;
            margin-top: 15px;
            list-style: none;
        }
        .attachment-mail ul li a.atch-thumb img {
            width: 200px;
            margin-bottom: 10px;
        }
        .attachment-mail ul li a.name span {
            float: right;
            color: #767676;
        }

        @media (max-width: 640px) {
            .compose-mail-wrapper .compose-mail {
                padding: 0px;
            }
        }
        @media (max-width: 360px) {
            .mail-wrapper .panel-sub-heading {
                text-align: center;
            }
            .mail-wrapper .panel-sub-heading .pull-left, .mail-wrapper .panel-sub-heading .pull-right {
                float: none !important;
                display: block;
            }
            .mail-wrapper .panel-sub-heading .pull-right {
                margin-top: 10px;
            }
            .mail-wrapper .panel-sub-heading img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 10px;
            }
            .mail-wrapper .panel-footer {
                text-align: center;
            }
            .mail-wrapper .panel-footer .pull-right {
                float: none !important;
                margin-left: auto;
                margin-right: auto;
            }
            .mail-wrapper .attachment-mail ul {
                padding: 0px;
            }
            .mail-wrapper .attachment-mail ul li {
                width: 100%;
            }
            .mail-wrapper .attachment-mail ul li a.atch-thumb img {
                width: 100% !important;
            }
            .mail-wrapper .attachment-mail ul li .links {
                margin-bottom: 20px;
            }

            .compose-mail-wrapper .search-mail input {
                width: 130px;
            }
            .compose-mail-wrapper .panel-sub-heading {
                padding: 10px 7px;
            }
        }
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">

        <div class="col-sm-4">
            <!-- Star form compose mail -->
            <form class="form-horizontal">
                <div class="panel mail-wrapper rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">View Queries</h3>
                        </div>

                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-sub-heading inner-all">

<!--                        <div class="pull-right">-->
<!--                            <button class="btn btn-info btn-sm tooltips" data-container="body" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>-->
<!--                            <button class="btn btn-danger btn-sm tooltips" data-container="body" data-original-title="Trash" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-trash-o"></i></button>-->
<!--                            <a href="#mail-compose.html" class="btn btn-success btn-sm"><i class="fa fa-reply"></i> Reply</a>-->
<!--                        </div>-->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-sub-heading -->
                    <div class="panel-sub-heading inner-all">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-7">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="..." class="img-circle senden-img">
                                <span>maildjavaui@gmail.com</span>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-5">
                                <p class="pull-right"> 10:15AM 02 FEB 2014</p>
                            </div>
                        </div>
                    </div><!-- /.panel-sub-heading -->
                    <div class="panel-body">
                        <div class="view-mail">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>

                        </div><!-- /.view-mail -->
                    </div><!-- /.panel-body -->
                    <div class="panel-footer">
<!--                        <div class="pull-right">-->
<!--                            <a href="#mail-compose.html" class="btn btn-success btn-sm"><i class="fa fa-reply"></i> Reply</a>-->
<!--                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-arrow-right"></i> Forward</button>-->
<!--                            <button class="btn btn-info btn-sm tooltips" data-container="body" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>-->
<!--                            <button class="btn btn-danger btn-sm tooltips" data-container="body" data-original-title="Trash" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-trash-o"></i></button>-->
<!--                        </div>-->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-footer -->
                </div><!-- /.panel -->
            </form>
            <!--/ End form compose mail -->
        </div>
    </div>
</div>
</body>
</html>
