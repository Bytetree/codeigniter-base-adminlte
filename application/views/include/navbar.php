

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url('admin');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BT</b>D</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ByteTree</b> DataWorld</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="navtext">User: <b><?= ucwords($this->session->userdata('username')); ?></b></li>
          <!-- User Account: style can be found in dropdown.less -->
          <li><a href="<?= site_url('auth/logout'); ?>" class="btn">Logout</a></li>
        </ul>
      </div>
    </nav>
  </header>
 