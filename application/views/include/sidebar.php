<?php 
$cur_tab = $this->uri->segment(2)==''?'dashboard': $this->uri->segment(2);  
?>  

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <?php include('sidebar/user.php'); ?>

      <?php if( $this->session->userdata('user_role') == 1 ): ?>
        <?php include('sidebar/admin.php'); ?>

        <?php include('sidebar/example.php'); ?>
      <?php endif; ?>
    </section>
    <!-- /.sidebar -->
  </aside>

<script>
  $("#<?= $cur_tab ?>").addClass('active');
</script>
