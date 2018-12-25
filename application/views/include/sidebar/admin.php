<li class="header">ADMIN NAVIGATION</li>

<li id="users" class="treeview">
  <a href="#">
    <i class="fa fa-user"></i> <span>Users</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li id=""><a href="<?= base_url('admin/users'); ?>"><i class="fa fa-circle-o"></i>Users List</a></li>
    <li id="user_add"><a href="<?= base_url('admin/users/add'); ?>"><i class="fa fa-circle-o"></i>Add Users</a></li>
    <li id="group"><a href="<?= base_url('admin/group'); ?>"><i class="fa fa-circle-o"></i>User Group </a></li>
  </ul>
</li>

<li id="export" class="treeview">
  <a href="#">
    <i class="fa fa-life-ring"></i> <span>Backup & Export</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li class=""><a href="<?= base_url('admin/export'); ?>"><i class="fa fa-circle-o"></i> Database Backup </a></li>
  </ul>
</li>