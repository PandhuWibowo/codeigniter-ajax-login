<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ajax CRUD</title>

    <link href="<?= base_url() ?>assets/admin/css/style.default.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/morris.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/admin/css/select2.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=base_url()?>assets/admin/js/html5shiv.js"></script>
    <script src="<?=base_url()?>assets/admin/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<header>
    <div class="headerwrapper">
        <div class="header-left">
            <a href="" class="logo">
<!--                <img src="--><?//= base_url() ?><!--assets/admin/logo.png" alt="Admin Panel"/>-->
                <p style="color:#fffeee; font-size: 16px; font-weight: bold">Admin Panel<p>
            </a>
        </div>
        <!-- header-left -->

        <div class="header-right">

            <div class="pull-right">

                <form class="form form-search" action="">
                    <input type="search" class="form-control" placeholder="Search"/>
                </form>
                <div class="btn-group btn-group-option">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i> Activity Log</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url() ?>administrator/logout"><i class="glyphicon glyphicon-log-out"></i>Sign
                                Out</a></li>
                    </ul>
                </div>
                <!-- btn-group -->

            </div>
            <!-- pull-right -->

        </div>
        <!-- header-right -->

    </div>
    <!-- headerwrapper -->
</header>

<section>
    <div class="mainwrapper">
        <div class="leftpanel">
            <div class="media profile-left">
                <a class="pull-left profile-thumb" href="">
                    <img class="img-circle" src="<?= base_url() ?>assets/admin/images/photos/user.png" alt="">
                </a>

                <div class="media-body">
                    <h4 class="media-heading"><?= $this->session->userdata('last_name') ?></h4>
                    <small class="text-muted"></small>
                </div>
            </div>
            <!-- media -->

            <h5 class="leftpanel-title">Navigation</h5>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href=""><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li class="parent"><a href="#"><i class="fa fa-suitcase"></i> <span>UI Elements</span></a>
                    <ul class="children">
                        <li><a href="">Alerts &amp; Notifications</a></li>
                        <li><a href="">Buttons</a></li>
                    </ul>
                </li>
                <li class="parent"><a href="#"><i class="fa fa-edit"></i> <span>Forms</span></a>
                    <ul class="children">
                        <li><a href="">Code Editor</a></li>
                        <li><a href="">General Forms</a></li>
                    </ul>
                </li>
                <li class="parent"><a href="#"><i class="fa fa-bars"></i> <span>Tables</span></a>
                    <ul class="children">
                        <li><a href="">Basic Tables</a></li>
                        <li><a href="">Data Tables</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="fa fa-map-marker"></i> <span>Maps</span></a></li>
                <li class="parent"><a href="#"><i class="fa fa-file-text"></i> <span>Pages</span></a>
                    <ul class="children">
                        <li><a href="">404 Page</a></li>
                        <li><a href="">Blank Page</a></li>

                    </ul>
                </li>

            </ul>

        </div>
        <!-- leftpanel -->

        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                            <li>Dashboard</li>
                        </ul>
                        <h4>Dashboard</h4>
                    </div>
                </div>
                <!-- media -->
            </div>
            <!-- pageheader -->

            <div class="contentpanel">
                <div class="alert alert-info">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button>
                    <strong>Hello Admin</strong> Welcome<a class="alert-link" href=""> to Ajax CRUD</a>
                    Application Dashboard
                </div>
            </div>
            <!-- contentpanel -->

        </div>
        <!-- mainpanel -->
    </div>
    <!-- mainwrapper -->
</section>


<script src="<?= base_url() ?>assets/admin/js/jquery-1.11.1.min.js"></script>
<!--<script src="js/jquery-migrate-1.2.1.min.js"></script>-->
<script src="<?= base_url() ?>assets/admin/js/bootstrap.min.js"></script>
<!--<script src="js/modernizr.min.js"></script>-->
<!--<script src="js/pace.min.js"></script>-->
<!--<script src="js/retina.min.js"></script>-->
<!--<script src="js/jquery.cookies.js"></script>-->
<!---->
<!--<script src="js/flot/jquery.flot.min.js"></script>-->
<!--<script src="js/flot/jquery.flot.resize.min.js"></script>-->
<!--<script src="js/flot/jquery.flot.spline.min.js"></script>-->
<!--<script src="js/jquery.sparkline.min.js"></script>-->
<!--<script src="js/morris.min.js"></script>-->
<!--<script src="js/raphael-2.1.0.min.js"></script>-->
<!--<script src="js/bootstrap-wizard.min.js"></script>-->
<!--<script src="js/select2.min.js"></script>-->

<script src="<?= base_url() ?>assets/admin/js/custom.js"></script>
<script src="<?= base_url() ?>assets/admin/js/dashboard.js"></script>

</body>
</html>
