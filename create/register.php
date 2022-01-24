<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Create Account</title>
  <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="icon" type="image/png" href="../img/favicon.ico">
      <script src="js/jquery-2.2.3.min.js"></script>
    <script>
      $(window).on("load resize ", function() {
          var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
          $('.tbl-header').css({'padding-right':scrollWidth});
      }).resize();
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $(document).on('click', '.message', function(){
          $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
          $('h1').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
      });
    </script>
</head>
<body>
  <div class="slideInDown animated">
  <div class="header ">
  	<h2>Create Account</h2>
  </div>
  <form method="post" action="register.php" enctype="multipart/form-data">
  	<?php include('errors.php'); ?>

     <?php  
          if (isset($_GET['accept'])) {

            if ($_GET['accept'] == "success") {
                echo '<div class="alert alert-danger" style="color:red;">
                        Account successfully created!!
                      </div>';
            }
          }         
        ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="../login.php">Sign in</a>
  	</p>
  </form>
</div>
   <p style="text-align: center; margin-top: 10px;">©2021. All rights reserved 
</p>
</body>
</html>