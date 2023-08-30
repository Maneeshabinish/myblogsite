<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin| Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/public/dist/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/public/dist/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/public//dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a class="h1"><b>Admin</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form id="quickForm "method="post" action="">
      <span id="fname">
        </span>
        <div class="input-group mb-3">
          <input type="text" name="firstname" class="form-control" id="first_name" placeholder="First name">
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
        <span id="lname">
        </span>
        <div class="input-group mb-3">
          <input type="text" name="lastname" class="form-control" id="last_name" placeholder="Last name">
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
        <span id="email_id">
        </span>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <span id="pass_word1">
        </span>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control"  placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <span id="pass_word2">
        </span>
        <div class="input-group mb-3">
          <input type="password" name="repeatPassword" class="form-control"  placeholder="Retype password">
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <span id="terms">
          </span>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="/login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/public/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/public/dist/js/adminlte.min.js"></script>


<!-- Page specific script -->
<!-- jquery-validation -->

<script src="/public/dist/plugins/jquery-validation/jquery.validate.min.js"></script>

<script src="/public/dist/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="/dist/js/adminlte.min.js"></script> -->

<script>
$(function (){
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successfully submitted!" );
      location.href="localhost:8888/validation";
    }
  });

  $('#quickForm').validate({
    
    rules: {

    firstname: "required",
    lastname: "required",

    email: {
        required: true,
        email: true,
      },
    
    password: {
        required: true,
        minlength: 5
      },

    repeatPassword: {
        required: true,
        equalTo: "#password"
      },
     
    terms: {
        required: true
      },

    },
    messages: {

      firstname: {
        required: "Please enter your firstname."
      },

      lastname: {
        required: "Please enter your lastname."
      },

      email: {
        required: "Please enter an email address",
        email: "Please enter a valid email address."
      },

      password: {
        required: "Please provide a password.",
        minlength: "Your password must be at least 5 characters long."
      },

      repeatPassword: {
        required:"Please re-enter the same password",
        equalTo: "Password mismatch" 
      },

      terms: "Please accept our terms."
    },

    errorElement: 'span',
    errorPlacement: function (error, element) {

      error.addClass('invalid-feedback');

      if(element.attr('name')== 'firstname'){
        $('#fname').append(error);
      }else if(element.attr('name')=='lastname'){
        $('#lname').append(error);
      }else if(element.attr('name')=='email'){
        $('#email_id').append(error);
      }else if(element.attr('name')=='password'){
        $('#pass_word1').append(error);
      
      }else if(element.attr('name')=='repeatPassword'){
        $('#pass_word2').append(error);
      }else if(element.attr('name')=='terms'){
        $('#terms').append(error);
      }
    },
  
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
    
  });
});
</script>
</body>
</html>
