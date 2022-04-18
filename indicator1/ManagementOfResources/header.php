<?php
	//check login
	include("../session.php");
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
  <link rel="stylesheet" href="../css/AdminLTE.css">
 
  <link rel="stylesheet" href="../css/skin-purple.css">
  <link rel="icon" href="/images/favicon.ico">
  
  	<!-- JS -->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="../js/moment.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="../js/bootstrap.datetime.js"></script>
	<script src="../js/bootstrap.password.js"></script>
	<script src="../js/scripts.js"></script>
	
	<!-- AdminLTE App -->
	<script src="../js/app.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" href="../css/styles.css">

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
      <span style="text-decoration:none;" class="logo-lg"><b>SBM</b> System</span>
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
              <li><a href="../logout.php" class="btn btn-default btn-flat">Log out</a></li>
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
          <a href="../dashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span>
          </a>
          
        </li>
        <!-- Menu 1 -->
         <li class="treeview">
          <a href="#"><i class="fa fa-folder"></i> <span>Inventory of Resources</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="human-resources.php"><i class="fa fa-plus"></i>Human Resources</a></li>
            <li><a href="financial-resources.php"><i class="fa fa-plus"></i>Financial Resources</a></li>
            <li><a href="tech-resources.php"><i class="fa fa-plus"></i>Technological Resources</a></li>
            <li><a href="material-resources.php"><i class="fa fa-plus"></i>Material Resources</a></li>
          </ul>
        </li>
        <!-- Menu 2 -->
         <li class="treeview">
          <a href="#"><i class="fa fa-folder"></i><span>RI Processes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="fgdstakeholders.php"><i class="fa fa-plus"></i>FGD w/ Stakeholders</a></li>
            <li><a href="rsp.php"><i class="fa fa-plus"></i>Resource SP</a></li>
            <li><a href="mqi.php"><i class="fa fa-plus"></i>M/Q Inventory</a></li>
          </ul>
        </li>
        
        <!-- Menu 4 -->
        <li class="treeview">
          <a href="#"><i class="fa fa-folder"></i><span>Trasparency</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ptb.php"><i class="fa fa-plus"></i>Posting of TransparencyBoard</a></li>
            <li><a href="rmooe.php"><i class="fa fa-plus"></i>Reports on MOOE Utl.</a></li>
            <li><a href="rsefu.php"><i class="fa fa-plus"></i>Reports on SEF Utl.</a></li>
            <li><a href="rigp.php"><i class="fa fa-plus"></i>Reports on IGP</a></li>
          </ul>
        </li>

        <!-- Menu 5 -->
        <li class="treeview">
          <a href="#"><i class="fa fa-folder"></i><span>SF Utilization Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mcc.php"><i class="fa fa-plus"></i>Meetings/Consultations</a></li>
            <li><a href="fgdsori.php"><i class="fa fa-plus"></i>FGD by Stakeholders & SORI</a></li>
          </ul>
        </li>

        <!-- Menu 6 -->
        <li class="treeview">
          <a href="rirdv.php"><i class="fa fa-plus"></i><span>RI & R Duly Validated</span>
          </a>

        <!-- Menu 7 -->
        <li class="treeview">
          <a href="sipaip.php"><i class="fa fa-plus"></i><span>SIP / AIP</span>
          </a>

        <!-- Menu 8 -->
        <li class="treeview">
          <a href="lr.php"><i class="fa fa-plus"></i><span>Liquidition Reports</span>
          </a>

        <!-- Menu 3 -->
        <li class="treeview">
          <a href="nr.php"><i class="fa fa-plus"></i><span>Narrative Reports</span></a>


        <!-- Menu 9 -->
        <li class="treeview">
          <a href="osa.php"><i class="fa fa-plus"></i><span>Other Supporting Artifacts</span></a>
  
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


