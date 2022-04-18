<?php
	//check login
	include("session.php");
?>


<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Based Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.css">
 
  <link rel="stylesheet" href="css/skin-purple.css">
  <link rel="icon" href="images/favicon.ico">
  
  	<!-- JS -->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="js/bootstrap.datetime.js"></script>
	<script src="js/bootstrap.password.js"></script>
	<script src="js/scripts.js"></script>
	
	<!-- AdminLTE App -->
	<script src="js/app.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">


</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

     <!--Logo -->
    <a href="" class="logo">
       <!--mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SBM</b>S</span>
       <!--logo for regular state and mobile devices -->
      <span style="text-decoration:none;" class="logo-lg"><b style="color:green;">SBM</b> System</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="https://pcrt.crab.org/images/default-user.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs" style="color: green;"><?php echo $_SESSION['login_username'];?></span>
            </a>
            <ul class="dropdown-menu">
             <!-- Drop down list-->
              <li><a href="logout.php" class="btn btn-default btn-flat">Log out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Menu 0.1 -->
        <li class="treeview">
          <a href="dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span>
          </a>
          
        </li>
        <!-- Menu 1 -->
         <li class="treeview">
          <a href="#"><i class="fa fa-folder"></i> <span>IFA School Res. Mngt.</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="ManagementOfResources/ifsrm.php"><i class="fa fa-plus"></i>IFA SRM</a></li>
            
          </ul>
        </li>
        <!-- Menu 2 -->
         <li class="treeview">
          <a href="#"><i class="fa fa-folder"></i><span>EFA School Res. Mngt.</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="ManagementOfResources/ga.php"><i class="fa fa-plus"></i>GAP Analysis</a></li>
            <li><a href="ManagementOfResources/ra.php"><i class="fa fa-plus"></i>Rapid Appraisal</a></li>
             <li><a href="ManagementOfResources/fgdr.php"><i class="fa fa-plus"></i>FGD Resource</a></li>
            <li><a href="ManagementOfResources/roap.php"><i class="fa fa-plus"></i>Results of Other AP</a></li>
          </ul>
        </li>
        <!-- Menu 3 -->
        <li class="treeview">
          <a href="#"><i class="fa fa-folder"></i><span>SIP/AIP/APP PP Budget</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ManagementOfResources/ps.php"><i class="fa fa-plus"></i>Planning Schedule</a></li>
            <li><a href="ManagementOfResources/dpm.php"><i class="fa fa-plus"></i>Min/Docs of the Plann. Meeting</a></li>
            <li><a href="ManagementOfResources/sp.php"><i class="fa fa-plus"></i>Supplemental Plan</a></li>
            <li><a href="ManagementOfResources/ar.php"><i class="fa fa-plus"></i>Attendance Record</a></li>
            <li><a href="ManagementOfResources/sa.php"><i class="fa fa-plus"></i>Supporting Artifacts</a></li>
            <li><a href="ManagementOfResources/hrdp.php"><i class="fa fa-plus"></i>HR Dev. Plan</a></li>
            <li><a href="ManagementOfResources/fm.php"><i class="fa fa-plus"></i>Feedback Mechanism</a></li>
          </ul>
        </li>


          <li class="header" 
         
                 style="bottom: 0; 
                    color: #7e7e7e; 
                    position: absolute; 
                    background-color: #dfdad9; 
                    width: 100%;">

                      &copy; ELVNHS - SBMS, S.Y. 2022-2023

         </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->


