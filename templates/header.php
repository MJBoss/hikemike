<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hike Mike</title>
<?php

  session_start();

  $cur_dir = explode('\\', getcwd());
  $loc = $cur_dir[count($cur_dir)-1];
  if($loc == "admin"){
    $dir_loc = "../";
  }else{
    $dir_loc = "";
  } 

  // parent file name without file extension
  $act_file = basename($_SERVER["SCRIPT_FILENAME"],'.php');
  $cur_loc = $act_file;


  if (!isset($_SESSION['u_id']) || $_SESSION['u_id'] == '') {
    $login = false;
  }else{
    $login = true;
  }


  $message = "";
  if(empty($_GET)){
    $message = "";
  }else if($_GET["error"] == "Nofile"){
    $message = "<p style='color: red; font-weight: bold;'>Please add a file!</p>";
  }else if($_GET["error"] == "Uploaded"){
    $message = "<p style='color: green; font-weight: bold;'>Updated Successfully</p>";
  }






?>

	<link rel="icon" href="<?php echo $dir_loc ?>img/Fevicon.png" type="<?php echo $dir_loc ?>image/png">
  <link rel="stylesheet" href="<?php echo $dir_loc ?>vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $dir_loc ?>vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?php echo $dir_loc ?>vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="<?php echo $dir_loc ?>vendors/linericon/style.css">
  <link rel="stylesheet" href="<?php echo $dir_loc ?>vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo $dir_loc ?>vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo $dir_loc ?>css/style.css">
  <link rel="stylesheet" href="<?php echo $dir_loc ?>css/main.css">  
  <link rel="stylesheet" href="<?php echo $dir_loc ?>modals/css/modal.css">  
  <!--link rel="stylesheet" href="css/extra.css"-->

  
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.php"><img src="<?php echo $dir_loc ?>img/logo.png" alt="" style="width: 110px;margin-left: 12px;"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="width: 5%;">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item <?php if($cur_loc == "index"){echo "active";}else{echo"";}?>"><a class="nav-link" href="<?php echo $dir_loc ?>index.php">Home</a></li> 
              <li class="nav-item <?php if($cur_loc == "archive"){echo "active";}else{echo"";}?>"><a class="nav-link" href="<?php echo $dir_loc ?>archive.php">Archive</a></li> 
              <li class="nav-item <?php if($cur_loc == "category"){echo "active";}else{echo"";}?>"><a class="nav-link" href="<?php echo $dir_loc ?>category.php">Category</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item <?php if($cur_loc == "blog-details"){echo "active";}else{echo"";}?>"><a class="nav-link" href="<?php echo $dir_loc ?>blog-details.php">Blog Details</a></li>
                </ul>
              </li>
              <li class="nav-item <?php if($cur_loc == "contact"){echo "active";}else{echo"";}?>"><a class="nav-link" href="<?php echo $dir_loc ?>contact.php">Contact</a></li>
                  <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style=" display: <?php if($login == true){echo"inline-block";}else{echo"none";} ?> !important; ">Admin</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="nav-link" href="<?php echo $dir_loc ?>admin/user-table.php">Users</a></li>
                      <li class="nav-item"><a class="nav-link" href="../includes/logout.inc.php">Logout</a></li>
                    </ul>
                  </li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-social">
              <li><a href="https://www.facebook.com/ser.mikee/" target="_blank"><i class="ti-facebook"></i></a></li>
              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
              <li><a href="https://www.instagram.com/ser.mikee/" target="_blank"><i class="ti-instagram"></i></a></li>
              <li><a href="#"><i class="ti-skype"></i></a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
  