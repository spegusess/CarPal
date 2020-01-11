<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Area - CarPal</title>
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
        <div class="container"><a class="navbar-brand" href="<?php echo site_url('page/customer');?>" style="font-size:36px;color:rgba(0,145,251,0.9);"><i class="fa fa-car" style="color:rgba(35,35,35,0.9);"></i>&nbsp;Car<strong>Pal</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-bell" style="color:#009106;"></i><span style="color:#ff0000;"><strong>&nbsp;01</strong></span>&nbsp;</a>
                        <div
                            class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">New Appointments (01)</a><a class="dropdown-item" role="presentation" href="#">Appointments Today (04)</a></div>
        </li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo site_url('page/customer');?>">Dashboard</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo site_url('calender');?>">Calender</a></li>
        <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Profile</a>
            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="faq.html">FAQ</a><a class="dropdown-item" role="presentation"
                    href="help.html">Help ?</a><a class="dropdown-item" role="presentation" href="<?php echo site_url('login/logout');?>">Log Out</a></div>
        </li>
        </ul>
        </div>
        </div>
    </nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a><span>CarPal</span></a></li>
        <li class="breadcrumb-item"><a><span>Hello <?php echo $this->session->userdata('user_name');?></span></a></li>
    </ol>
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>SUCCESS!</strong> <?php echo "Details";?> Updated Successfully.
		
		<?php if (isset($message)) { ?>
                        <CENTER><h3 style="color:green;">Appointment Request Sent Successfully</h3></CENTER><br>
        <?php } ?>
		
	</div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col offset-sm-0 line1">
                    <div>
                        <h1 style="color:rgb(79,79,79);">Vehicle Details&nbsp;<a href="#" data-toggle="modal" data-target="#vehicle"><i class="fa fa-pencil" style="font-size:23px;color:rgb(22,139,204);"></i></a></h1>
                        <hr>
                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>

                                    <?php 
                                            $i = 1; 
                                            foreach($vehicle_records as $i1) { 
                                            echo "<tr>"; 
                                            $i++;
                                            echo "<th>Plate No</th>";
                                            echo "<td>".$i1->vehicle_no."</td>";
                                            echo "</tr>";

                                            echo "<tr>"; 
                                            echo "<th>Class</th>";
                                            echo "<td>".$i1->vehicle_class."</td>";
                                            echo "</tr>";

                                            echo "<tr>"; 
                                            echo "<th>Type</th>";
                                            echo "<td>".$i1->vehicle_type."</td>";
                                            echo "</tr>";

                                            echo "<tr>"; 
                                            echo "<th>Brand</th>";
                                            echo "<td>".$i1->vehicle_brand."</td>";
                                            echo "</tr>";

                                            echo "<tr>"; 
                                            echo "<th>Model</th>";
                                            echo "<td>".$i1->vehicle_model."</td>";
                                            echo "</tr>";

                                            echo "<tr>"; 
                                            echo "<th>Year</th>";
                                            echo "<td>".$i1->vehicle_year."</td>";
                                            echo "</tr>";

                                            echo "<tr>"; 
                                            echo "<th>Color</th>";
                                            echo "<td>".$i1->vehicle_color."</td>";
                                            echo "</tr>";

                                            echo "<tr>"; 
                                            echo "<th>Last Service</th>";
                                            echo "<td>".$i1->last_service."</td>";
                                            echo "</tr>";

                                            echo "<tr>"; 
                                            echo "<th>Next Service</th>";
                                            echo "<td>".$i1->next_service."</td>";
                                            echo "</tr>";
                                            }          
                                    echo "</thead>";
                                    echo "<tbody>";
                                     
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <h1 class="text-center"><button class="btn btn-success" type="button" style="width:100%;" data-toggle="modal" data-target="#history">See Previous Services</button></h1>
                            </div>
                            <div>
                                <h1 class="text-center"><button class="btn btn-primary" type="button" style="width:100%;" data-toggle="modal" data-target="#appointment">Make an Appointment</button></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <h1 style="color:rgb(79,79,79);">User Details&nbsp;<a href="#" data-toggle="modal" data-target="#user"><i class="fa fa-pencil" style="font-size:23px;color:rgb(22,139,204);"></i></a></h1>
                    <hr>
                    <div class="row"> 
                        <div class="col"><img src="<?php echo base_url('assets/img/circled-user-male-skin-type-1-2.png');?>" style="width:155px;"><br/></div>
                        <div class="col"><img src="<?php echo base_url('assets/img/car.png');?>" style="width:185px;height:145px;"></div>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width:37px;"><i class="fa fa-user"></i></th>
                                        <?php
											$u=1;
											foreach($user_detail as $ud){
											
											$u++;
										echo "<td>".$ud->user_name."</td>";
                                    echo "<tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    echo "<tr>";
                                        echo "<td><i class=\"fa fa-envelope-o\"></i></td>";
                                        echo "<td>".$ud->user_email."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td><i class=\"fa fa-phone\"></i></td>";
                                        echo "<td>".$ud->user_mobile."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                        echo "<td><i class=\"fa fa-car\"></i></td>";
                                        echo "<td>".$ud->vehicle_no."</td>";
                                    echo "</tr>";
									}
									?>
                                    <tr> <form>
                                        <td><button class="btn btn-primary" type="button" style="width:30px;height:30px;padding-left:6px;padding-right:6px;padding-top:3px;padding-bottom:3px;"><i class="fa fa-plus" style="font-size:16px;"></i></button></td>
                                        <!-- <td><a href="#">SG XX 0001</br></a></td> -->
                                        <td><input type="text" name="new_vehicle"></td>
                                    </tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <!-- User -->
        <div class="modal" role="dialog" tabindex="-1" id="user">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-center modal-title">Edit User</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <div class="modal-content">
                        <?php if (isset($message)) { ?>
                        <CENTER><h3 style="color:green;">User Updated Successfully</h3></CENTER><br>
                        <?php } ?>

                            <form action="<?php echo site_url('user/update_u');?>" method="post">
                            <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">User Name</span></div><input class="form-control" type="text" name="user_name"></div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Email</span></div><input class="form-control" type="email" name="user_email"></div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Mobile</span></div><input class="form-control" type="text" name="user_mobile"></div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Vehicle No</span></div><input class="form-control" type="text" name="vehicle_no"></div>
                                
                                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-primary" type="submit">Submit</button></div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- End User -->
        <!-- Vehicle -->
        <div class="modal" role="dialog" tabindex="-1" id="vehicle">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-center modal-title">Edit Vehicle</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <div class="modal-content">
                        <?php if (isset($message)) { ?>
                        <CENTER><h3 style="color:green;">Vehicle Updated Successfully</h3></CENTER><br>
                        <?php } ?>

                            <form action="<?php echo site_url('vehicle/addvehicle');?>" method="post">
                            <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">User ID</span></div><input class="form-control" type="hidden" name="user_id" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>"></div>
                                    
                            <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;"> 
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Plate No</span></div><input class="form-control" type="text" name="vehicle_no"></div>
                                    
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Class</span></div><input class="form-control" type="text" name="vehicle_class"></div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Type</span></div><input class="form-control" type="text" name="vehicle_type"></div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Brand</span></div><input class="form-control" type="text" name="vehicle_brand"></div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Model</span></div><input class="form-control" type="text" name="vehicle_model"></div>                               
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Year</span></div><input class="form-control" type="number" name="vehicle_year"></div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Color</span></div><input class="form-control" type="text" name="vehicle_color"></div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Last Service</span></div><input class="form-control" type="date" name="last_service" placeholder="Date"></div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Next Service</span></div><input class="form-control" type="date" name="next_service" placeholder="Date"></div>
                                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-primary" type="submit">Submit</button></div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- End Vehicle -->
        <div class="modal" role="dialog" tabindex="-1" id="history" style="margin:auto;width:750px;">
            <!-- <div class="modal-dialog" role="document"> -->
                <div class="modal-content">
                    <div class="modal-header"><h4 class="modal-title">Service History</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#No</th>
                                        <th>Date</th>
                                        <th>Service Type</th>
                                        <th>Milage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $t=1;
                                    foreach($appointment_detail as $x3){
                                    echo "<tr>";
                                    echo "<td>".$t++."</td>";
                                    echo "<td>".$x3->appointment_date."</td>";
                                    echo "<td>".$x3->service_type."</td>";
                                    echo "<td>".$x3->current_milage."</td>";
                                    echo "</tr>";

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button></div>
                </div>
            </div>
        <!-- </div> -->
        <div class="modal" role="dialog" tabindex="-1" id="appointment">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-center modal-title">Make an Appointment</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <div class="modal-content">
                        <?php if (isset($message)) { ?>
                        <CENTER><h3 style="color:green;">Appointment Request Sent Successfully</h3></CENTER><br>
                        <?php } ?>

                            <form action="<?php echo site_url('appointment/make_appointment');?>" method="post">
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Vehicle No</span></div><input class="form-control" type="text" name="vehicle_no"></div>
                                
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Appointment Date/ Time</span></div><input class="form-control" type="date" name="date" placeholder="Date"><input class="form-control" name="time" type="time" Placeholder="time"></div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Service Type</span><span class="input-group-text" name="service_type" style="background-color:#ffffff;"><select class="form-control" name='service_type'><?php 

                                    foreach($services as $row)
                                    { 
                                    echo '<option value="'.$row->service_type.'">'.$row->service_type.'</option>';
                                    }
                                    ?></select></span>
                                    </div>
                                </div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Milage</span></div><input class="form-control" type="number" name="current_milage"></div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Email Address</span></div><input class="form-control" type="text" name="email"></div>
                                <div class="input-group" style="margin-top:2%;padding-right:5%;padding-left:5%;margin-bottom:2%;">
                                    <div class="input-group-prepend"><span class="input-group-text" style="width:200px;">Mobile No</span></div><input class="form-control" type="text" name="mobile_no"></div>
                                    <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-primary" type="submit">Submit</button></div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
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