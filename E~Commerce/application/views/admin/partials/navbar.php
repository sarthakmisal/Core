<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>admin_assets/src/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>admin_assets/src/assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>admin_assets/src/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url() ?>admin_assets/src/assets/vendors/font-awesome/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet"
    href="<?= base_url() ?>admin_assets/src/assets/vendors/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet"
    href="<?= base_url() ?>admin_assets/src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= base_url() ?>admin_assets/src/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?= base_url() ?>admin_assets/src/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start "
        style="background:black">
        <a class="navbar-brand brand-logo" href="<?= base_url() ?>"><img
            src="<?= base_url() ?>admin_assets/src/assets/images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url() ?>"><img
            src="<?= base_url() ?>admin_assets/src/assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch" style="background:black">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class=" sidebar sidebar-offcanvas" style="background-color:black" id="sidebar">
        <ul class="nav">

          <li class="nav-item reymond active">
            <a class="nav-link" href="<?=base_url('admin')?>">
              <span class="menu-title font-weight-bold">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item reymond">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-orders" aria-expanded="false"
              aria-controls="ui-orders">
              <span class="menu-title text-white font-weight-bold">Orders</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-orders">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= base_url() ?>admin/pendingOrders">Pending Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= base_url() ?>admin/dispatchedOrders">Dispatched Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= base_url() ?>admin/deliveredOrders">Delivered Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= base_url() ?>admin/rejectedOrders">Rejected Orders</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item reymond">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
              aria-controls="ui-basic">
              <span class="menu-title text-white font-weight-bold">Category</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= base_url() ?>admin/category">Manage Category</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= base_url() ?>admin/subCategory">Sub-Category</a>
                </li>

              </ul>
            </div>
          </li>
          <li class="nav-item reymond">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-product" aria-expanded="false"
              aria-controls="ui-product">
              <span class="menu-title text-white font-weight-bold">Product</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-product">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= base_url() ?>admin/addProduct">Add Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= base_url() ?>admin/manageProduct">Manage Products</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item reymond">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-carousel" aria-expanded="false"
              aria-controls="ui-carousel">
              <span class="menu-title text-white font-weight-bold">Carousel</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-carousel">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= base_url() ?>admin/manageCarousel">Add Carousel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="<?= base_url() ?>admin/manageProduct">Manage Products</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <style>
        .reymond {
          background-color: black !important;
        }

        .reymond:hover {
          background-color: #222 !important;
        }
      </style>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">