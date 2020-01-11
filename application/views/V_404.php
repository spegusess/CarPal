<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Carpal</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/fonts/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/fonts/ionicons.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/Fixed-navbar-starting-with-transparency.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/-Login-form-Page-BS4-.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/Footer-Clean.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/Footer-Dark.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/styles.css');?>" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navbar-transparency">
        <div class="container"><a class="navbar-brand" href="login.html" style="font-size:36px;color:rgba(0,145,251,0.9);"><i class="fa fa-car" style="color:rgba(35,35,35,0.9);"></i>&nbsp;Car<strong>Pal</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-bell" style="color:#009106;"></i><span style="color:#ff0000;"><strong>&nbsp;01</strong></span>&nbsp;</a>
                        <div
                            class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">New Appointments (01)</a><a class="dropdown-item" role="presentation" href="#">Appointments Today (04)</a></div>
        </li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="admin.html">Dashboard</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="user.html">User</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Calender</a></li>
        <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Profile</a>
            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="user.html">User</a><a class="dropdown-item" role="presentation" href="#">Settings</a><a class="dropdown-item" role="presentation" href="faq.html">FAQ</a><a class="dropdown-item" role="presentation"
                    href="help.html">Help ?</a><a class="dropdown-item" role="presentation" href="<?php echo site_url('login/logout');?>">Log Out</a></div>
        </li>
        </ul>
        </div>
        </div>
    </nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a><span>CarPal</span></a></li>
        <li class="breadcrumb-item"><a><span>404 Page Not Found</span></a></li>
    </ol>
    <section>
        <div class="container-fluid">
            <div style="width:1024 px;height:650 px;background-size:cover;background-repeat:no-repeat;">
                <div class="row" style="background-size:contain;height:720px;background-image:url(<?php echo base_url('assets/img/404-page.jpg');?>);">
                    <div class="col"> 
                        <h1 class="text-center" style="color:rgb(179,11,0);">404 Error</h1>
                        <h1 class="text-center">Page Not Found</h1>
                        <h2 class="text-center" style="margin-top:5%;">SPUTTER, SPUTTER ... LOOKS LIKE YOU DROVE INTO A BROKEN PAGE.&nbsp;<br>SCHEDULE AN APPOINTMENT TO FIX BOTH!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">All types of Services</a></li>
                            <li><a href="#">Appointments</a></li>
                            <li><a href="#">Service Tracking</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Subsidiaries</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>CarPal Service Station Management</h3>
                        <p>Service station management platform</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">CarPal © 2019</p>
            </div>
        </footer>
    </div>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/admin-menu.js');?>"></script>
    <script src="<?php echo base_url('assets/js/Fixed-navbar-starting-with-transparency.js');?>"></script>
</body>

</html>