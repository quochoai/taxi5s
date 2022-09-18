<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-success navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a></li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#"><i class="fas fa-user-cog"></i> <?php echo $fullnameAdmin ?></a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a class="dropdown-item changePassword cursorPointer"><i class="fas fa-unlock-alt"></i> <?php echo $lang['changePassword'] ?></a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?action=<?php echo $def['logout'] ?>" title="<?php echo $lang['logout']; ?>"><i class="fas fa-sign-out-alt"></i></a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
  