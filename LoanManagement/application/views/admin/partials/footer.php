</div><!-- /.container-fluid -->
            </div>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            Copyright &copy; 2021-<?= date("Y", time()) ?> <a href="https://sarthakforum.000webhost.com">SarthakForums.io</a>.
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?=base_url()?>admin_assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?=base_url()?>admin_assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?=base_url()?>admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?=base_url()?>admin_assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?=base_url()?>admin_assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?=base_url()?>admin_assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?=base_url()?>admin_assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?=base_url()?>admin_assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?=base_url()?>admin_assets/plugins/moment/moment.min.js"></script>
    <script src="<?=base_url()?>admin_assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?=base_url()?>admin_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?=base_url()?>admin_assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?=base_url()?>admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url()?>admin_assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=base_url()?>admin_assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?=base_url()?>admin_assets/dist/js/pages/dashboard.js"></script>
</body>

</html>
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,600,700" rel="stylesheet">
  
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  
<style>
body {
  background: #f1f1f1;
  font-family: "Cabin", sans-serif;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}

.container {
  width: 38%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #FFF;
  padding: 1em 2em;
}
.container .heading {
  position: relative;
  text-align: center;
  height: 40px;
  display: block;
  margin-bottom: 1em;
}
.container .heading h2 {
  margin: 0;
  padding: 0;
  text-transform: uppercase;
}
.container .heading h2 span {
  position: relative;
  bottom: 3px;
  left: 1em;
  font-size: 0.8rem;
  background: #1E73BE;
  padding: 2px 10px;
  color: #FFF;
  border-radius: 3px;
  text-transform: capitalize;
}

.xd-message {
  display: flex;
  flex-wrap: nowrap;
  width: 100%;
  height: 100%;
  min-height: 60px;
  background: #FFF;
  border: 1px solid #455870;
  margin-bottom: 2rem;
  box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.1);
}
.xd-message-icon {
  background: #455870;
  display: flex;
  flex: 1;
  justify-content: center;
  align-items: center;
  color: #FFF;
  font-size: 1.6rem;
  margin: 0;
  margin-left: -1px;
}
.xd-message-content {
  flex: 6;
  padding-left: 1.5rem;
  margin: 0;
  display: flex;
  align-items: center;
}
.xd-message-content p {
  padding: 0;
  margin: 0;
}
.xd-message-close {
  color: #455870;
  display: flex;
  flex: 1;
  justify-content: center;
  align-items: center;
  font-size: 1.2rem;
  transition: color 0.4s ease;
}
.xd-message-close .close-icon {
  transition: color 0.4s ease;
}
.xd-message-close .close-icon:hover {
  color: #0b0e11;
}

.msg-danger {
  border: 1px solid #b05150;
}
.msg-danger .xd-message-icon {
  background: #b05150;
}
.msg-danger .xd-message-content,
.msg-danger .xd-message-close {
  color: #b05150;
}
.msg-danger .xd-message-close .close-icon:hover {
  color: #8d4140;
}

.msg-success {
  border: 1px solid #47ae74;
}
.msg-success .xd-message-icon {
  background: #47ae74;
}
.msg-success .xd-message-content,
.msg-success .xd-message-close {
  color: #47ae74;
}
.msg-success .xd-message-close .close-icon:hover {
  color: #388a5c;
}

.msg-warning {
  border: 1px solid #ef974b;
}
.msg-warning .xd-message-icon {
  background: #ef974b;
}
.msg-warning .xd-message-content,
.msg-warning .xd-message-close {
  color: #ef974b;
}
.msg-warning .xd-message-close .close-icon:hover {
  color: #eb7c1c;
}

.hide {
  transition: all 0.5s;
  opacity: 0;
  visibility: hidden;
  -webkit-animation: hideMsgAlert 1s;
          animation: hideMsgAlert 1s;
}

@-webkit-keyframes hideMsgAlert {
  0% {
    opacity: 1;
    transform: translateX(-20%);
  }
  100% {
    opacity: 0;
    transform: translateX(100%);
  }
}

@keyframes hideMsgAlert {
  0% {
    opacity: 1;
    transform: translateX(-20%);
  }
  100% {
    opacity: 0;
    transform: translateX(100%);
  }
}
@media only screen and (max-width: 1000px) {
  .container {
    width: 60%;
  }

  .xd-message-icon,
.xd-message-close {
    font-size: 1rem;
  }

  .xd-message-content {
    font-size: 0.8rem;
  }
}
@media only screen and (max-width: 600px) {
  .container {
    width: 80%;
  }

  .xd-message-icon,
.xd-message-close {
    font-size: 1rem;
  }

  .xd-message-content {
    font-size: 0.8rem;
  }

  .heading span {
    display: none;
  }
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <div class="container bg-transparent">
  <!-- <div class="heading"><h2>Message Alert <span>Xpressdocs - E2E</span></h2></div> -->
  <!-- Primary Message -->
  <!-- <div class="xd-message">
    <div class="xd-message-icon">
      <i class="ion-alert"></i>
    </div>
    <div class="xd-message-content">
      <p>The quick brown fox jumped over the lazy dog.</p>
    </div>
    <a href="#" class="xd-message-close">
      <i class="close-icon ion-close-round"></i>
    </a>  
  </div>  -->
  
  <!-- Danger Message -->
  <?php
   if(isset($_SESSION['error'])){ ?>
      <div class="position-fixed w-100" style="top:-250px;right:-450px">
          <div class="xd-message msg-danger">
            <div class="xd-message-icon">
              <i class="ion-alert-circled"></i>
            </div>
            <div class="xd-message-content">
              <p><?=$_SESSION['error']?>.</p>
            </div>
            <a href="#" class="xd-message-close">
              <i class="close-icon ion-close-round"></i>
            </a>  
          </div>
      </div>
    <?php }
    unset($_SESSION['error']);
    if(isset($_SESSION['success'])){ ?>
  
  <!-- Danger Success -->
  <div class="position-fixed w-100" style="top:-250px;right:-450px">
      <div class="xd-message msg-success">
        <div class="xd-message-icon">
          <i class="ion-checkmark"></i>
        </div>
        <div class="xd-message-content">
          <p><?=$_SESSION['success']?>.</p>
        </div>
        <a href="#" class="xd-message-close">
          <i class="close-icon ion-close-round"></i>
        </a>  
      </div>
</div>
<?php }
unset($_SESSION['success']); ?>
  
  <!-- Danger Warning -->
  <!-- <div class="xd-message msg-warning">
    <div class="xd-message-icon">
      <i class="ion-alert-circled"></i>
    </div>
    <div class="xd-message-content">
      <p>The quick brown fox jumped over the lazy dog.</p>
    </div>
    <a href="#" class="xd-message-close">
      <i class="close-icon ion-close-round"></i>
    </a>  
  </div>  -->
  
</div>
  
      <script id="rendered-js" >
var closesIcon = document.querySelectorAll('.xd-message .close-icon');

closesIcon.forEach(function (closeIcon) {
  closeIcon.addEventListener('click', function () {
    this.parentNode.parentNode.classList.add('hide');
  });
});
//# sourceURL=pen.js
    </script>

  
</body>

</html>