<?php
session_start();
if (isset($_SESSION['username'])) {
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/login.css">
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
    <style type="text/css">
  
    </style>
</head>
<body>

<main>
<!-- Log In -->
<section>
  <div class="slideInDown animated">
    <div class="login-page">
       <div class="header">
    <h2>Please, Login</h2>
  </div>
      <div class="form">
        <?php  
          if (isset($_GET['error'])) {

            if ($_GET['error'] == "invalid") {
                echo '<div class="alert alert-danger" style="color:red;">
                        Invalid login!!
                      </div>';
            }
        
          }         
        ?>
        <div class="alert1"></div>
     
        <form class="login-form" action="aclogin.php" method="post" enctype="multipart/form-data">
          
<div class="input-group">
      <label>Username</label>
      <input type="text" name="user" id="user" placeholder="Username" required/>
    </div>



    <div class="input-group">
      <label>Password</label>
      <input type="password" name="pass" id="pass" placeholder="Password" required/>
    </div>
          
          <button type="submit" name="login" id="login">login</button>
        </form>
      </div>
    </div>
  </div>
  <p style="text-align: center;">©2021. All rights reserved 
</p>
</section>
</main>
</body>
</html>