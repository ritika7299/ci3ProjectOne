<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot-Password</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

    <div class="login-box">
        <div class="login-logo">
            <a href="">Forgot password</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                </p>
                <p class="login-box-msg"></p>


                <?php echo validation_errors(); ?>
                <form action="<?php base_url(); ?>Auth/forgotpass_info" method="post">

                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" name="email"
                            value="<?php echo set_value('email'); ?>" placeholder="Email" required="">
                        <?php echo form_error('email'); ?>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <p class="error d-none" style="color:red;">Email is required.</p>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="otp" name="otp"
                            value="<?php echo set_value('otp'); ?>" placeholder="OTP" required="">
                        <?php echo form_error('otp'); ?>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-key" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <p class="error d-none" style="color:red;">OTP is required.</p>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <!-- <label for="remember">
                                    Remember Me
                                </label> -->

                                <?php
                                if ($this->session->flashdata('success')) { ?>
                                    <!-- <div class="success-div float-right">
                                            <p class="alert alert-success" role="alert">
                                                <i class="fa fa-check" aria-hidden="true"></i> Sign-in successfully!!</p>
                                        </div> -->
                                <?php }
                                ?>
                                <?php
                                if ($this->session->flashdata('error')) { ?>
                                    <div id="mywish" class="danger-div">
                                        <p class="alert alert-danger" role="alert">
                                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Invalid Email
                                            or Password!!
                                        </p>
                                    </div>
                                <?php }
                                ?>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="resetpass">
                            <button type="submit" class="btn btn-primary btn-block" style="width:260%">Reset
                                Password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <p class="">
                        <a href="<?php echo site_url(); ?>Auth/signin" class="text-center ">click
                            here!!<b>Sign-in</b></a>
                    </p>


                </form>



                <!-- /.social-auth-links -->

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <?php echo form_close(); ?>
    <!-- /.login-box -->
    </form>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>
</body>
<script>
    $(".danger-div").delay(2000).slideUp(200, function () {
        $(this).alert('close');
    });
</script>


</html>