<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

	<ul class="sidebar-menu tree" data-widget="tree">

	    <?php include('sidebar/user.php'); ?>

	    <?php if( $this->session->userdata('user_role') == 1 ): ?>
	      <?php include('sidebar/admin.php'); ?>

	      <?php include('sidebar/example.php'); ?>
	    <?php endif; ?>

	</ul>

  </section>
  <!-- /.sidebar -->
</aside>