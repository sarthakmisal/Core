<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loan Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>admin_assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?=base_url()?>admin_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=base_url()?>admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?=base_url()?>admin_assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>admin_assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?=base_url()?>admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?=base_url()?>admin_assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?=base_url()?>admin_assets/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
               <!--  <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?=base_url('admin')?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?=base_url('admin')?>" class="brand-link">
                <img src="<?=base_url()?>admin_assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold">Loan Management</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    
                    <div class="info">
                        <a href="#" class="text-center" style="margin-left:30px;font-size:20px">Alexander Pierce</a>
                    </div>
                </div>

                
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                            
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer">
                                <i class="nav-icon fas fa-cog"></i>
                                <p onclick="dropDown()">
                                    Master Options
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=base_url('admin/loanTypes/')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Loan Types</p>
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Closed Loans</p>
                                    </a>
                                </li>
                                
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Loan Files
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=base_url('admin/createFiles/')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Files</p>
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="<?=base_url('admin/pendingFiles/')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pending Files</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url('admin/approvedFiles/')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Approved Files</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url('admin/disbursedFiles/')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Disbursed Files</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?=base_url('admin/rejectedFiles/')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rejected Files</p>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cursor-pointer">
                                <i class="nav-icon fas fa-cog"></i>
                                <p >
                                    Loans
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?=base_url('admin/activeLoans/')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active Loans</p>
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="<?=base_url('admin/closedLoans/')?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Closed Loans</p>
                                    </a>
                                </li>
                                
                                
                            </ul>
                        </li>                        
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">

                