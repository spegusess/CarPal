<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Carpal</title>
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

<body style="font-size: 1.5em;">
    <nav class="navbar navbar-light navbar-expand-md navbar-transparency">
        <div class="container"><a class="navbar-brand" href="<?php echo site_url('page');?>" style="font-size:36px;color:rgba(0,145,251,0.9);"><i class="fa fa-car" style="color:rgba(35,35,35,0.9);"></i>&nbsp;Car<strong>Pal</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-bell" style="color:#009106;"></i><span style="color:#ff0000;"><strong>&nbsp;NEW</strong></span>&nbsp;</a>
                        <div
                            class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">New Appointments (01)</a><a class="dropdown-item" role="presentation" href="#">Appointments Today (04)</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo site_url('page');?>">Dashboard</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo site_url('calender');?>">Calender</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Profile</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="user.html">User</a><a class="dropdown-item" role="presentation"
                                href="help.html">Help ?</a><a class="dropdown-item" role="presentation" href="<?php echo site_url('login/logout');?>">Log Out</a></div>
                    </li>
        </ul>
        </div>
        </div>
    </nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a><span>CarPal</span></a></li>
        <li class="breadcrumb-item"><a><span>Admin</span></a></li>
        <li class="breadcrumb-item"><a><span>Welcome Back <?php echo $this->session->userdata('user_name');?></span></a></li>
        
    </ol>
    <section id="Dashboard-Menus">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3" id="menu-items" style="background-color:#ffffff;"><script>
    function appointments(){
        document.getElementById('appointments').style.display = 'block';
        document.getElementById('services').style.display = 'none';
        document.getElementById('users').style.display = 'none';
        document.getElementById('settings').style.display = 'none';
        //$("#appointment").hide();
    }
    function services(){
        document.getElementById('appointments').style.display = 'none';
        document.getElementById('services').style.display = 'block';
        document.getElementById('users').style.display = 'none';
        document.getElementById('settings').style.display = 'none';
        //$("#appointment").hide();
    }
    function users(){
        document.getElementById('appointments').style.display = 'none';
        document.getElementById('services').style.display = 'none';
        document.getElementById('users').style.display = 'block';
        document.getElementById('settings').style.display = 'none';
        //$("#appointment").hide();
    }
    function settings(){
        document.getElementById('appointments').style.display = 'none';
        document.getElementById('services').style.display = 'none';
        document.getElementById('users').style.display = 'none';
        document.getElementById('settings').style.display = 'block';
        //$("#appointment").hide();
    }
</script>
                    <ul class="list-unstyled" style="font-size:24px;">
                        <li id="link-appointments" class="dash-menu"><button class="btn btn-dark width300" type="button" onclick="appointments();">Appointments<br /></button></li>
                        <li id="link-services" class="dash-menu"><button class="btn btn-dark width300" type="button" onclick="services()">Services<br /></button></li>
                        <li id="link-usrmgmt" class="dash-menu"><button class="btn btn-dark width300" type="button" onclick="users()">User Management<br /></button></li>
                        <li id="link-settings" class="dash-menu"><button class="btn btn-dark width300" type="button" onclick="settings()">Settings<br /></button></li>
                    </ul>
                </div>
                <div class="col-xl-9 d-block" id="menu-contents">
                    <div id="appointments" style="display:block;">
                        <div class="contents-of-menu">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <?php 
                                            $j = 1; 
                                            echo "<tr>"; 
                                            echo "<th>#No</th>";
                                            echo "<th>Appointment ID</th>"; 
                                            echo "<th>Vehicle No</th>"; 
                                            echo "<th>Service Type</th>"; 
                                            echo "<th>Date</th>";
                                            echo "<th>Time</th>";
                                            echo "<th>Status</th>";
                                            echo "<th>Milage</th>";
                                            echo "<th>Approve/Deny</th>";
                                            
                                            echo "<th>Delete</th>"; 
                                            echo "<tr>";


                                    echo "</thead>";
                                    echo "<tbody>";
                                    
                                    foreach($appointment_records as $r1) { 
                                        echo "<tr>"; 
                                        echo "<td>".$j++."</td>"; 
                                        echo "<td>".$r1->appointment_id."</td>"; 
                                        echo "<td>".$r1->vehicle_no."</td>"; 
                                        echo "<td>".$r1->service_type."</td>"; 
                                        echo "<td>".$r1->appointment_date."</td>";
                                        echo "<td>".$r1->appointment_time."</td>";
                                        echo "<td>".$r1->appointment_status."</td>";
                                        echo "<td>".$r1->current_milage."</td>"; 
                                        echo "<td><a href='".base_url()."index.php/appointment/approve/"
                                           .$r1->appointment_id."'>Approve</a></td>"; 
                                        echo "<td><a href='".base_url()."index.php/appointment/delete/"
                                           .$r1->appointment_id."'>Delete</a></td>"; 
                                        echo "<tr>"; 
                                        } 
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            <h1 class="text-right" style="width:92%;">
                                <div class="btn-group" role="group"><button class="btn btn-secondary" type="button" style="width:135px;"><i class="fa fa-th-large"></i>&nbsp; Sort&nbsp;</button><button class="btn btn-primary" type="button">Next&nbsp;<i class="fa fa-angle-double-right"></i></button></div>
                            </h1>
                        </div>
                    </div>
                    <div id="services" style="display:none;">
                        <div class="contents-of-menu">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <?php 
                                            $k = 1; 
                                            echo "<tr>"; 
                                            echo "<th>#No</th>";
                                            echo "<th>Service ID</th>"; 
                                            echo "<th>Service Type</th>"; 
                                            echo "<th>Bill (LKR)</th>"; 
                                        
                                            echo "<th>Delete</th>"; 
                                            echo "<tr>";


                                    echo "</thead>";
                                    echo "<tbody>";

                                    foreach($servc_records as $r2) { 
                                        echo "<tr>"; 
                                        echo "<td>".$k++."</td>"; 
                                        echo "<td>".$r2->service_id."</td>";
                                        echo "<td>".$r2->service_type."</td>"; 
                                        echo "<td>".$r2->service_bill."</td>";
                                        
                                        echo "<td><a href='".base_url()."index.php/service/delete/"
                                           .$r2->service_id."'>Delete</a></td>"; 
                                        echo "<tr>"; 
                                        } 
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                        <h1 class="text-right" style="width:92%;">
                                <div class="btn-group" role="group"><button class="btn btn-success" type="button" style="width:100%;" data-toggle="modal" data-target="#newservice"><i class="fa fa-plus"></i> Add Service</button><button class="btn btn-primary" type="button">Next&nbsp;<i class="fa fa-angle-double-right"></i></button></div>
                            </h1>
                            
                        </div>
                    </div>
                    <div id="users" style="display:none;">
                        <div class="contents-of-menu">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <?php 
                                            $i = 1; 
                                            echo "<tr>"; 
                                            echo "<th>#No</th>"; 
                                            echo "<th>User ID</th>";
                                            echo "<th>User Name</th>"; 
                                            echo "<th>Email</th>"; 
                                            echo "<th>Mobile</th>";
                                            echo "<th>Vehicle No</th>";
                                            
                                            echo "<th>Delete</th>"; 
                                            echo "<tr>";


                                    echo "</thead>";
                                    echo "<tbody>";

                                    foreach($records as $r) { 
                                        echo "<tr>"; 
                                        echo "<td>".$i++."</td>"; 
                                        echo "<td>".$r->user_id."</td>"; 
                                        echo "<td>".$r->user_name."</td>"; 
                                        echo "<td>".$r->user_email."</td>"; 
                                        echo "<td>".$r->user_mobile."</td>"; 
                                        echo "<td>".$r->vehicle_no."</td>"; 
                                         
                                        echo "<td><a href='".base_url()."index.php/user/delete/"
                                           .$r->user_id."'>Delete</a></td>"; 
                                        echo "<tr>"; 
                                        } 
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            <h1 class="text-right" style="width:92%;">
                                <div class="btn-group" role="group"><button class="btn btn-success" type="button" style="width:100%;" data-toggle="modal" data-target="#newuser"><i class="fa fa-plus"></i> Add User</button><button class="btn btn-primary" type="button">Next&nbsp;<i class="fa fa-angle-double-right"></i></button></div>
                            </h1>
                        </div>
                    </div>
                    <!-- Add User-->
                    <div class="modal" role="dialog" tabindex="-1" id="newuser">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="text-center modal-title">Add An User</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                            <div class="modal-body">
                                <div class="modal-content">
                                <?php if (isset($message)) { ?>
                                <CENTER><h3 style="color:green;">User Added Successfully</h3></CENTER><br>
                                <?php } ?>

                                    <form action="<?php echo site_url('user/add_user');?>" method="post">
                                        <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                            <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">User Role&nbsp;</span><span class="input-group-text" style="background-color:#ffffff;"><select class="form-control" name="user_role"><option value="1">Admin</option><option value="2" selected>Staff</option><option value="3">Customer</option></select></span>
                                            </div>
                                        </div>
                                        <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                        <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Username</span></div><input class="form-control" type="text" name="user_name"></div>
                                        <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                        <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Password</span></div><input class="form-control" type="text" name="user_password"></div>
                                        <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                        <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Vehicle No</span></div><input class="form-control" type="text" name="vehicle_no"></div>
                                        <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                            <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Email Address</span></div><input class="form-control" type="text" name="user_email"></div>
                                        <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;">
                                            <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Mobile No</span></div><input class="form-control" type="text" name="mobile_no"></div>
                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-success" type="submit">Add User</button></div>
                                            </div>
                                    </form>
                                </div></div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                    <!-- Add Service -->
                    <div class="modal" role="dialog" tabindex="-1" id="newservice">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="text-center modal-title">Add A Service</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                            <div class="modal-body">
                                <div class="modal-content">
                                <?php if (isset($message)) { ?>
                                <CENTER><h3 style="color:green;">Service Added Successfully</h3></CENTER><br>
                                <?php } ?>

                                    <form action="<?php echo site_url('service/add_service');?>" method="post">
                                        <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                        <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Service Type</span></div><input class="form-control" type="text" name="service_type"></div>
                                        <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                        <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Price</span></div><input class="form-control" type="text" name="service_bill"></div>
                                            
                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-primary" type="submit">Add Service</button></div>
                                            </div>
                                    </form>
                                </div></div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                    <!-- END -->
                    <div id="settings" style="display:none;">
                        <div class="contents-of-menu">
                            
                            <div class="table-responsive" style="width:60%" id="Security">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Admin Username</td>
                                            <td><a href="#">admin</a></td>
                                        </tr>
                                        <tr>
                                            <td>Admin Password</td>
                                            <td><a href="#">************</a><br></td>
                                        </tr>
                                        <tr>
                                            <td>Email Address</td>
                                            <td><a href="#">admin@carpal.dev</a></td>
                                        </tr>
                                        <tr>
                                            <td>Email Notifications</td>
                                            <td><a href="#">Daily</a><br></td>
                                        </tr>
                                        <tr>
                                            <td>SMS Notifications</td>
                                            <td><a href="#">Configure Settings</a><br></td>
                                        </tr>
                                        <tr>
                                            <td>OTP Send Number</td>
                                            <td><a href="#">0712345678</a><br></td>
                                        </tr>
                                        <tr>
                                            <td>Security Question</td>
                                            <td><a href="#">What is your Dogs Last Name?</a><br></td>
                                        </tr>
                                        <tr>
                                            <td>Theme Color</td>
                                            <td><a href="#">Light</a></td>
                                        </tr>
                                        <tr>
                                            <td>Font</td>
                                            <td><a href="#">Arial</a><br></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            <h1 class="text-right" style="width:92%;">
                                <div class="btn-group" role="group"><button class="btn btn-dark" type="button">Reset to Default</button><button class="btn btn-success" type="button">Save &nbsp;<i class="fa fa-check"></i></button></div>
                            </h1>
                        </div>
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
                <p class="copyright">CarPal © 2019 <a href="<?php echo base_url('assets/project.zip');?>">Download Src</a></p>
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