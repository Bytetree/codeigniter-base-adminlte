<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
  <li class="header">EXAMPLE NAVIGATION</li>
</ul>

<ul class="sidebar-menu">
  <li id="example" class="treeview">
      <a href="#">
        <i class="fa fa-snowflake-o"></i> <span>Codeigniter Examples</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class=""><a href="<?= base_url('admin/example/simple_datatable'); ?>"><i class="fa fa-circle-o"></i>Simple Datatable</a></li>
        <li class=""><a href="<?= base_url('admin/example/ajax_datatable'); ?>"><i class="fa fa-circle-o"></i>Ajax Datatable</a></li>
        <li class=""><a href="<?= base_url('admin/example/pagination'); ?>"><i class="fa fa-circle-o"></i>Pagination</a></li>
        <li class=""><a href="<?= base_url('admin/example/advance_search'); ?>"><i class="fa fa-circle-o"></i>Advance Search</a></li>
        <li class=""><a href="<?= base_url('admin/example/file_upload'); ?>"><i class="fa fa-circle-o"></i>File Upload</a></li>
      </ul>
    </li>
</ul>

<ul class="sidebar-menu">
  <li id="joins" class="treeview">
      <a href="#">
        <i class="fa fa-i-cursor"></i> <span>Database Joins</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class=""><a href="<?= base_url('admin/joins'); ?>"><i class="fa fa-circle-o"></i> Serverside Join </a></li>
        <li class=""><a href="<?= base_url('admin/joins/simple'); ?>"><i class="fa fa-circle-o"></i> Simple Join</a></li>
      </ul>
    </li>
</ul>