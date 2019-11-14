  <!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->


  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css') ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script  src="<?php echo base_url(); ?>assets/dist/js/jquery1.js"></script>


  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/style1.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/style2.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/style3.css">



  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/style.css">
  </head>
  <body class="hold-transition login-page"  background="<?php echo base_url(); ?>assets/dist/img/bg.jpg">
  <header role="banner">

  <nav class="main-nav">
  <ul>
  <!-- inser more links here -->
  <li><a class="cd-signin" href="#">Sign in</a></li>
  <li><a class="cd-signup" href="#">Sign up</a></li>
  </ul>
  </nav>
  </header>
  <center><h1 class="centered">Now book your parking space from your home
  <br>
  <br>
  Hurry Up!!!</h1></center>
  <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
  <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
  <ul class="cd-switcher">
  <li><a href="#">Sign in</a></li>
  <li><a href="#">New account</a></li>
  </ul>
  <!-- <div class="login-box"> -->
  <!--   <div class="login-logo">
  <a href="<?php //echo base_url('auth'); ?>"><b>Login</b></a>
  </div> -->
  <!-- /.login-logo -->
  <!-- <div class="login-box-body"> -->
  <!--    <p class="login-box-msg">Sign in to start your session</p>
  -->
  




  <div id="cd-login"> <!-- log in form -->

  <form action=""  id="param1" method="post" class="cd-form">
    <p>
  <?php /*if(!empty($errors)) {
  echo $errors;
  } */?>
    </p>
  <p class="fieldset">
  <label class="image-replace cd-email full-width has-padding has-border" for="signin-email">E-mail</label>
  <input type="email" class="full-width has-padding has-border" name="email" id="email" placeholder="Email" autocomplete="off" />

  </p>


  <p class="fieldset">
  <label class="image-replace cd-password" for="signin-password">Password</label>
  <input type="password" class="full-width has-padding has-border" name="password" id="password" placeholder="Password" autocomplete="off">

  </p>

  <p class="fieldset">
  <input type="checkbox" id="remember-me" checked>
  <label for="remember-me">Remember me</label>
  </p>

  <p class="fieldset">
  <input class="full-width" type="submit" value="Login"><span class="status" ></span>
  </p>

  <!-- <div class="row">
  <div class="login-status"><?php //echo $this->session->flashdata('message'); ?></div>
  </div> -->
  </form>
  </div>
  <div id="cd-signup">
  <form role="form" class="cd-form" action="" id="param2" method="post">
  <div class="box-body">

  <?php echo validation_errors(); ?>


  <p class="fieldset">
  <label class="image-replace cd-username" for="signup-username">Username</label>

  <input type="text" class="full-width has-padding has-border" id="username" name="username" placeholder="Username">
  </p>

  <p class="fieldset">
  <label class="image-replace cd-email" for="signup-email">E-mail</label>

  <input type="email" class="full-width has-padding has-border" id="email" name="email" placeholder="Email">
  </p>

  <p class="fieldset">
  <label class="image-replace cd-password" for="signup-password">Password</label>
  <input type="password" class="full-width has-padding has-border" id="password" name="password" placeholder="Password">
  </p>


  <p class="fieldset">
  <label class="image-replace cd-password" for="signup-cpassword"> Confirm Password</label>

  <input type="password" class="full-width has-padding has-border" id="cpassword" name="cpassword" placeholder="Confirm Password">
  </p>


  <p class="fieldset">
  <label class="image-replace cd-firstname" for="signup-firstname">First Name</label>

  <input type="text" class="full-width has-padding has-border" id="fname" name="fname" placeholder="First name">
  </p>

  <p class="fieldset">
  <label class="image-replace cd-lastname" for="signup-lastname">Last Name</label>

  <input type="text" class="full-width has-padding has-border" id="lname" name="lname" placeholder="Last name">
  </p>

  <p class="fieldset">
  <label class="image-replace cd-phone" for="signup-phone">Phone</label>

  <input type="text" class="full-width has-padding has-border" id="phone" name="phone" placeholder="Phone">
  </p>

  <div class="form-group">
  <label for="gender">Gender</label>
  <div class="radio">
  <label>
  <input type="radio" name="gender" id="male" value="1">
  Male
  </label>
  <label>
  <input type="radio" name="gender" id="female" value="2">
  Female
  </label>
  </div>
  </div>

  </div>
  <!-- /.box-body -->
  <p class="fieldset">
  <input class="full-width has-padding" type="submit" value="Create account">
  <span class="msg"></span>
  </p>
  <div class="row">
  <div class="login-status"><?php //echo $this->session->flashdata('message'); ?>
   
  </div>
  </div>      



  </form>
  </div>
  </div>
  </div>

  <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js') ?>"></script>
  <script>
  $(function () {
  $('input').iCheck({
  checkboxClass: 'icheckbox_square-blue',
  radioClass: 'iradio_square-blue',
  increaseArea: '20%' // optional
  });
  });
  </script>
<script>
 
$(document).ready(function(){

//$('cd-user-modal').modal({ backdrop: 'static', keyboard: false, show: false});

    $("#param1").submit(function(event){
        event.preventDefault();
    //var Isvalid;
    var email = $("input[name='email']").val();
    var password = $("input[name='password']").val();
    /* Section Code for Validation */
   
    if(email.trim()=='')
    {
      $("input[name='email']").css("border-bottom","2px solid red");
       }
    else if(password.trim()=='')
    {
      $("input[name='password']").css("border-bottom","2px solid red");
      
    }
    else
    {
      $("input[name='email']").css("border-bottom","2px solid green");
      $("input[name='password']").css("border-bottom","2px solid green");
      
      var form = new FormData($(this)[0]);
      /* Code Section for Ajax */
      $.ajax({
            type:"POST",
            //enctype:"multipart/form-data",
            url:"http://localhost/parking/auth/login/",
            data:form,
            processData:false,
            contentType:false,
            beforeSend:function()
      {
        //$("#example1").dataTable().fnDestroy();
        $(".status").html('<center><i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="color:#3c8dbc"></i></center>');
      },
          success:function(responseHtml)
        {
        var json = $.parseJSON(responseHtml);
        if(json["IsSuccess"]=="yes")
        {
          location.href="http://localhost/parking/auth/login/dashboard";
        }
        else
        {
          $(".status").html(json["Message"]); 
          $("input[name='password']").css("border-bottom","2px solid red");    
          $("input[name='email']").css("border-bottom","2px solid red");     
        }
      }
      });
    }
  });
    $("#param2").submit(function(event){
        event.preventDefault();
    //var Isvalid;
    var email = $("input[name='email']").val();
    var password = $("input[name='password']").val();
    /* Section Code for Validation */
   
    if(email.trim()=='')
    {
      $("input[name='email']").css("border-bottom","2px solid red");
       }
    else if(password.trim()=='')
    {
      $("input[name='password']").css("border-bottom","2px solid red");
      
    }
    else
    {
      $("input[name='email']").css("border-bottom","2px solid green");
      $("input[name='password']").css("border-bottom","2px solid green");
      
      var form = new FormData($(this)[0]);
      /* Code Section for Ajax */
      $.ajax({
            type:"POST",
            //enctype:"multipart/form-data",
            url:"http://localhost/parking/auth/register_user",
            data:form,
            processData:false,
            contentType:false,
            beforeSend:function()
      {
        //$("#example1").dataTable().fnDestroy();
        $(".msg").html('<center><i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="color:#3c8dbc"></i></center>');
      },
          success:function(responseHtml)
        {
        var json = $.parseJSON(responseHtml);
        if(json["IsSuccess"]=="yes")
        {
          location.href="http://localhost/parking/auth/login/dashboard";
        }
        else
        {
          $(".msg").html(json["Message"]); 
          $("input[name='password']").css("border-bottom","2px solid red");    
          $("input[name='email']").css("border-bottom","2px solid red");     
        }
      }
      });
    }
  });



  });

  </script>
  <script  src="<?php echo base_url(); ?>assets/dist/js/jquery.js"></script>
  <script  src="<?php echo base_url(); ?>assets/dist/js/index.js"></script>
  </body>
  </html>
<?php // echo base_url('auth/register_user'); ?>