<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Carpal</title>
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
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block" style="padding:40px;">
                <div class="m-auto w-lg-75 w-xl-50" style="margin-top:40px;margin-bottom:40px;">
                    <h2 class="text-info font-weight-light mb-5" style="font-size: 3em;"><i class="fa fa-car"></i>&nbsp;Car<strong>Pal</strong></h2>
                    <form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
                        <?php echo $this->session->flashdata('msg');?>
                        <div class="form-group"><label class="text-secondary">Email</label><input class="form-control" type="text" name="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email"></div>
                        <div class="form-group"><label class="text-secondary">Password</label><input class="form-control" type="password" name="password" required=""></div><button class="btn btn-info btn-block mt-2" style="font-size: 1.5em;" type="submit">Log In</button><button class="btn btn-info btn-block" type="button"
                            id="modelRegister" style="margin-left:0px; font-size: 1.5em;" data-toggle="modal" data-target="#register-block">Register</button></form>
                    <p class="mt-3 mb-0" style="font-size: 1.2em;"><a href="<?php echo site_url('user/reset');?>" class="text-info small">Forgot your email or password?</a></p>
					<?php echo $this->session->flashdata('reset_msg');?>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(<?php echo base_url('assets/img/6496.jpg');?>);background-size:cover;background-position:center center;"></div>
        </div>
    </div>
    <div class="modal" role="dialog" tabindex="-1" id="register-block">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="text-center text-info font-weight-light" style="margin-bottom:10px;">Register</h2><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body"><div class="align-self-center">
    <div class="m-auto">
        <form style="width:auto;" action="<?php echo site_url('register');?>" method="post">
            <div class="form-group"><label class="text-secondary">Full Name</label><input type="text" name="name" required inputmode="latin-name" class="form-control" /></div>
            <div class="form-group"><label class="text-secondary">Mobile</label><input type="text" name="mobile" required inputmode="tel" class="form-control" /></div>
            <div class="form-group"><label class="text-secondary">Email</label><input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" inputmode="email" class="form-control" /></div>
            <div class="form-group"><label class="text-secondary">Password</label><input type="password" name="password" required class="form-control" /></div>
            <div class="form-group"><label class="text-secondary">Vehicle No</label><input type="text" name="vehicle_no" required inputmode="latin-name" class="form-control" /></div>
            
            <button class="btn btn-info btn-block mt-2" style="font-size: 1.2em;" type="submit">Register</button>
                <a id="google-button" class="btn btn-block btn-social btn-danger btn-google" style="color:#ffffff; font-size: 1.2em;">
                    <i class="fa fa-google"></i> Sign in with Google
                <script>
                $('#google-button').on('click', function() {
                // Initialize with your OAuth.io app public key
                OAuth.initialize('YOUR_OAUTH_KEY');
                // Use popup for oauth
                OAuth.popup('google').then(google => {
                    console.log('google:',google);
                    // Retrieves user data from oauth provider
                    // Prompts 'welcome' message with User's email on successful login
                    // #me() is a convenient method to retrieve user data without requiring you
                    // to know which OAuth provider url to call
                    google.me().then(data => {
                    console.log('me data:', data);
                    alert('Google says your email is:' + data.email + ".\nView browser 'Console Log' for more details");
                    });
                    // Retrieves user data from OAuth provider by using #get() and
                    // OAuth provider url
                    google.get('/plus/v1/people/me').then(data => {
                    console.log('self data:', data);
                    })
                });
                })                   
                </script>
                </a>

        </form>
        <p class="mt-3 mb-0 center"><a href="#"></a></p>
    </div>
</div></div>
                <!--<div class="modal-footer"></div>-->
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/admin-menu.js');?>"></script>
    <script src="<?php echo base_url('assets/js/Fixed-navbar-starting-with-transparency.js');?>"></script>
</body>

</html>