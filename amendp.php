  <?php
session_start();
if (!isset($_SESSION['username'])) {
  header("location: login.php");
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> 
    <title>FarmStat| Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
     
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript">
        function addRows(){ 
    var table = document.getElementById('emptbl');
    var rowCount = table.rows.length;
    var cellCount = table.rows[0].cells.length; 
    var row = table.insertRow(rowCount);
    for(var i =0; i <= cellCount; i++){
        var cell = 'cell'+i;
        cell = row.insertCell(i);
        var copycel = document.getElementById('col'+i).innerHTML;
        cell.innerHTML=copycel;
    
    }
}
function deleteRows(){
    var table = document.getElementById('emptbl');
    var rowCount = table.rows.length;
    if(rowCount > '2'){
        var row = table.deleteRow(rowCount-1);
        rowCount--;
    }
    else{
        alert('There should be atleast one row');
    }
}
    </script>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
         <?php 

//Ending a php session after 1 minutes of inactivity
$minutesBeforeSessionExpire=1;
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > ($minutesBeforeSessionExpire*600))) {
    session_unset();     // unset $_SESSION   
    session_destroy();   // destroy session data  
    header("location: login.php");
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity

 ?>
  <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header" style="background: whitesmoke;">
                <a href="index.php"><img class="main-logo" src="img/logo/lgo.png"    alt="" /></a>
                 
            </div>
          
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                           <a href="index.php">
                                   <i class="icon nalika-home icon-wrap"></i>
                                   <span class="mini-click-non" style="font-size: 12px;">Home</span>
                                </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non" style="font-size: 12px;">New Record</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="newdairy.php"><span class="mini-sub-pro" style="font-size: 12px;">+ Dairy</span></a></li>
                                <li><a title="View Mail" href="newpig.php"><span class="mini-sub-pro" style="font-size: 12px;">+ Piggery</span></a></li>
                                <li><a title="Compose Mail" href="newpoultery.php"><span class="mini-sub-pro" style="font-size: 12px;">+ Poultery</span></a></li>
                                <li><a title="Compose Mail" href="newgarden.php"><span class="mini-sub-pro" style="font-size: 12px;">+ Garden</span></a></li>
                            </ul>
                        </li>
                     <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non" style="font-size: 12px;">Saved Records</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="viewdairy.php"><span class="mini-sub-pro" style="font-size: 12px;">Dairy</span></a></li>
                                <li><a title="Data Maps" href="viewpigs.php"><span class="mini-sub-pro" style="font-size: 12px;">Piggery</span></a></li>
                                <li><a title="Pdf Viewer" href="viewpoultery.php"><span class="mini-sub-pro" style="font-size: 12px;">Poultery</span></a></li>
                                <li><a title="X-Editable" href="viewfield.php"><span class="mini-sub-pro" style="font-size: 12px;">Garden</span></a></li>
                                 
                            </ul>
                        </li>
                       <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-pie-chart icon-wrap"></i> <span class="mini-click-non" style="font-size: 12px;">Amend Records</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="File Manager" href="amendair.php"><span class="mini-sub-pro" style="font-size: 12px;">Dairy</span></a></li>
                                <li><a title="Blog" href="amendpg.php"><span class="mini-sub-pro" style="font-size: 12px;">Piggery</span></a></li>
                                <li><a title="Blog Details" href="amendp.php"><span class="mini-sub-pro" style="font-size: 12px;">Poultery</span></a></li>
                                <li><a title="404 Page" href="amendg.php"><span class="mini-sub-pro" style="font-size: 12px;">Garden</span></a></li> 
                            </ul>
                        </li>
                         
                       <li>
                            <a  href="logout.php" aria-expanded="false"><i class="icon nalika-user icon-wrap"></i> <span class="mini-click-non" style="font-size: 12px;">Log Out</span></a>
                             
                        </li>
                      
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    

    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="img/logo/lgo.png" style="width: 200px; height: 60px;" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="icon nalika-menu-task"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <div class="breadcome-heading">
                                                <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                            <span class="admin-name">Morelife Zibayiwa</span>
                                                            <i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                         
                                                        <li><a href="logout.php"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="index.php" style="font-size: 12px;">Home</a>
                                      
                                        </li>
                                     <li style="font-size: 12px;">
                            <a class="" href="#" aria-expanded="false"><span class="mini-click-non" style="font-size: 12px;">New Record</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="newdairy.php"><span class="mini-sub-pro" style="font-size: 12px;">+ Dairy</span></a></li>
                                <li><a title="View Mail" href="newpig.php"><span class="mini-sub-pro" style="font-size: 12px;">+ Piggery</span></a></li>
                                <li><a title="Compose Mail" href="newpoultery.php"><span class="mini-sub-pro" style="font-size: 12px;">+ Poultery</span></a></li>
                                <li><a title="Compose Mail" href="newgarden.php"><span class="mini-sub-pro" style="font-size: 12px;">+ Garden</span></a></li>
                            </ul>
                        </li>

                                    <li >
                            <a class="has-arrow" href="viewdairy.php" aria-expanded="false"><span class="mini-click-non" style="font-size: 12px;">Saved Records</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="dairy.php"><span class="mini-sub-pro" style="font-size: 12px;">Dairy</span></a></li>
                                <li><a title="View Mail" href="pigs.php"><span class="mini-sub-pro" style="font-size: 12px;">Piggery</span></a></li>
                                <li><a title="Compose Mail" href="poultery.php"><span class="mini-sub-pro" style="font-size: 12px;">Poultery</span></a></li>
                                <li><a title="Compose Mail" href="garden.php"><span class="mini-sub-pro" style="font-size: 12px;">Garden</span></a></li>
                            </ul>
                        </li>

                                   <li >
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="mini-click-non" style="font-size: 12px;">Amend Records</span></a>
                           
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="File Manager" href="amendair.php"><span class="mini-sub-pro" style="font-size: 12px;">Dairy</span></a></li>
                                <li><a title="Blog" href="amendpg.php"><span class="mini-sub-pro" style="font-size: 12px;">Piggery</span></a></li>
                                <li><a title="Blog Details" href="amendp.php"><span class="mini-sub-pro" style="font-size: 12px;">Poultery</span></a></li>
                                <li><a title="404 Page" href="amendg.php"><span class="mini-sub-pro" style="font-size: 12px;">Garden</span></a></li> 
                            </ul>
                        </li>

                     <li >
                    <a class="" href="logout.php" aria-expanded="false"><span class="mini-click-non" style="font-size: 12px;">Log Out</span></a>
                        </li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1.5px solid grey;
            font-size: 10px;
        }
        th, td {
            padding: 2px;
        }
input{
width: 100%;
} 
    </style>
<div>
    <h4 style="float: left;">Poultery data amendment</h4> 
    <br>
    <form method="post" action="delP.php" enctype="multipart/form-data">
    <div style="width: 15%;"> <p> <input type="number" name="index" id="index" style="width:38%;"> Enter data index</p><button id="delete" name="delete" style=" padding: 5px; background: red; color:white; border: 2px solid red; border-radius: 5px; font-size: 10px; float: left;"><b>Delete entry</b></button>
 </div>

</form>
                                <div style="float: right;">
                                <button id="add" style=" padding: 5px; background: green; color:white; border: 2px solid green; border-radius: 5px; font-size: 10px;"  onclick="addRows()"><b>Add row</b></button>

                                <button id="del" style=" padding: 5px; background: red; color:white; border: 2px solid red; border-radius: 5px; font-size: 10px;" onclick="deleteRows()"><b>Delete row</b></button>
<form method="post" action="pup.php" enctype="multipart/form-data">
</div><br><br>
 <table id="emptbl">
        
        <tr style="background: #03c04a; color: white;">
            <th>Index</th>
          <th>Poultery class</th>
            <th>Total count</th>
            <th>Stage</th>
            <th>Feed Type (AM)</th>
            <th>Feed Qty (AM)</th>
            <th>Feed Type (PM)</th>
            <th>Feed Qty (PM)</th>
            <th>Infection</th>
            <th>Treatment</th>
            <th>Deaths</th>
            
        </tr>
        <tr>
            <td id="col0"><input type="number"  name="index"></td>
            <td id="col0"><input type="text"  name="cla"></td>
            <td id="col1"><input type="text"  name="tot"></td>
            <td id="col2"><input type="text"  name="stag"></td>
            <td id="col3"><input type="text"  name="ftyp"></td>
            <td id="col4"><input type="text"  name="fqty"></td>
            <td id="col5"><input type="text"  name="feedtyp"></td>
            <td id="col6"><input type="text"  name="feedqty"></td>
            <td id="col7"><input type="text"  name="inf"></td>
            <td id="col8"><input type="text"  name="trt"></td>
            <td id="col9"><input type="text"  name="death"></td>
        </tr>
        
    </table>
<br>
<button id="update" name="update" style="padding: 5px; background: #03c04a; color:white; border: 2px solid #03c04a; border-radius: 5px; font-size: 11px;"><b>Save Changes</b></button>
                            <br><br><br>
  <?php  
          if (isset($_GET['accept'])) {

            if ($_GET['accept'] == "success") {
                echo '<div class="alert alert-success" style="color:brown;">
                        Index is successfully amended!!
                      </div>';
            }
             if ($_GET['accept'] == "yes") {
                echo '<div class="alert alert-success" style="color:brown;">
                        Record deleted successfully!!
                      </div>';
            }
            if ($_GET['accept']=="fail") {
                echo '<div class="alert alert-success" style="color:red;">
                        Failed to connect server!!
                      </div>';
            }
          }         
        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
</form>
<div class="footer-copyright-area" >
            <div class="container-fluid" >
                <div class="row" >
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                        <p>Copyright © 2021 <a href="https://mail.google.com/mail/u/0/?ogbl#inbox?compose=CllgCJlHFTQKkZwptrXxkzdKBXXphHjGfLsJQnlGfDBZBjphjgNlQXVZTPLNrxStRxGgjKPwBKg" target="blank">MSU FarmStat Online</a> All rights reserved.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- float JS
        ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
</body>

</html>