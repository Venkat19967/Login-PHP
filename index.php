<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: Dashboard/dashboard.php");
}
?>




<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#usernameLoading').hide();
    $('username').keyup(function(){
      $('#usernameLoading').show();
        $.post("check.php", {
          username: $('username').val()
        }, function(response){
          $('#usernameResult').fadeOut();
          setTimeout("finishAjax('usernameResult', '"+escape(response)+"')", 400);
        });
        return false;
    });
  });

  function finishAjax(id, response) {
    $('#usernameLoading').hide();
    $('#'+id).html(unescape(response));
    $('#'+id).fadeIn();
  } //finishAjax
</script>



      <link rel="stylesheet" href="css/style.css">
      <style>
      .btn-link{
  border:none;
  outline:none;
  background:none;
  cursor:pointer;
  color:#ffffff;
  padding:0;
  text-decoration:underline;
  font-family:inherit;
  font-size:inherit;
}
</style>


</head>

<body>
  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <!-- <h1>Sign Up for Free</h1> -->

          <form action="register.php" method="post">

          <div class="field-wrap">
            <div class="field-wrap">
              <label>
                User Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="on" name="username" />
            <!-- </div> -->

            <span id="usernameLoading"><img src="loading.gif" alt="Ajax Indicator" /></span>
            <span id="usernameResult"></span>
            </div>

           <!-- <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div> -->
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="on" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password" />
          </div>

          <button type="submit" class="button button-block"/>Sign Up</button>

          </form>

        </div>

        <div id="login">
          <h1>Welcome Back!</h1>

          <form action="" method="post">

            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="username"required autocomplete="on" name="username"/>
          </div>


            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="on" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>

          <p class="forgot"><a href="forgotpassword.php" method = 'POST'>Forgot Password?</a></p>

          <button class="button button-block" name="submit"/>Log In</button>

          </form>

          <!-- <form action="forgotpassword.php" method="post">
              <button type="submit" name="" value="" class="btn-link">Forgot Password?</button>
          </form> -->

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
