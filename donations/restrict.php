<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/Donations_theme1.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Restricted Page</title>
<!-- InstanceEndEditable -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700italic,700,500&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>


<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/theme1.css" rel="stylesheet">
<link href="assets/css/site.css" rel="stylesheet">


<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

<!--[if lt IE 7]>
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
<![endif]-->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->

<link rel="shortcut icon" href="assets/ico/favicon.ico" type="image/x-icon">
<link rel="icon" href="assets/ico/favicon.ico" type="image/x-icon">

<!-- InstanceBeginEditable name="head" -->
<meta charset="UTF-8">

<!-- InstanceEndEditable -->
</head>
<body>
<div class="wrap">
<section>
<nav class="navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="/">godonateme.com</a>
    </div>
    
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav ">
          <?php if (!empty($_SESSION['MM_UserId'])) { ?>
        <li class="active">
          <a href="logout.php">Logout</a>
        </li>
          <?php } ?>
          <?php if (empty($_SESSION['MM_UserId'])) { ?>
        <li class="active">
          <a href="login.php">Login</a>
        </li>
          <?php } ?>
          <?php if (empty($_SESSION['MM_UserId'])) { ?>
        <li>
          <a href="register.php">Register</a>
        </li>
          <?php } ?>
        <li>
          <a href="new.php">Create</a>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <?php if (!empty($_SESSION['MM_UserId'])) { ?>
        <li>
          <a href="javascript:;">Welcome, <?php echo $_SESSION['MM_Name']; ?></a>
        </li>
          <?php } ?>
        <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
          <ul class="dropdown-menu">
            <li>
              <a href="#">Contact Us</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    
  </div>
</nav>
</section>
<section class="top-section">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <?php include('inc_googleadsense.php'); ?>
    </div>
  </div>
</div>
</section>

<section>
<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
        <?php include('inc_category.php'); ?>
      </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<!-- InstanceBeginEditable name="EditRegion5" -->
    
<!-- InstanceEndEditable -->


<!-- InstanceBeginEditable name="EditRegion4" -->
<div class="page-header">
<h3>Restricted Page</h3>
</div>
<!-- InstanceEndEditable -->

<div class="row">
<div class="col-lg-12">
<!-- InstanceBeginEditable name="EditRegion3" -->
<p>Please login with appropriate permission to view this page. <a href="login.php">Click here</a> to login.</p><!-- InstanceEndEditable -->
</div>
</div>


</div><!-- middle col -->

<?php include('inc_featured.php'); ?>


</div><!-- / inner .row -->
</div>
</section>

<section class="custom-footer">
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7">
      <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
          <div>
            <ul class="list-unstyled">
              <li>
                 <a>Link anchor</a>
              </li>
              <li>
                 <a>Link anchor</a>
              </li>
              <li>
                 <a>Link anchor</a>
              </li>
              <li>
                 <a>Link anchor</a>
              </li>
              <li>
                 <a>Link anchor</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4  col-xs-6">
          <div>
            <ul class="list-unstyled">
              <li>
                 <a>Link anchor</a>
              </li>
              <li>
                 <a>Link anchor</a>
              </li>
              <li>
                 <a>Link anchor</a>
              </li>
              <li>
                 <a>Link anchor</a>
              </li>
              <li>
                 <a>Link anchor</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
          <div>
            <ul class="list-unstyled">
              <li>
                 <a>Link anchor</a>
              </li>
              <li>
                 <a>Link anchor</a>
              </li>
              <li>
                 <a>Link anchor</a>
              </li>
              <li>
                 <a>Link anchor</a>
              </li>
              <li>
                 <a>Link anchor</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5">
       <span class="text-right"><?php include('inc_siteaddr.php'); ?></span>
    </div>
  </div>
</div>
</section>
</div>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/bootstrap.js"></script>

</body>
<!-- InstanceEnd --></html>