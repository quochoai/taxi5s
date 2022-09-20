<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-successs elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0);" class="brand-link">
      <span class="brand-text font-weight-light"><?php echo $text_role; ?></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column <?php echo $def['nav-flat']; ?>" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item<?php if ($pqh[0] == $def['actionCategoriesNews']) echo ' menu-open'; ?>">
            <a href="?action=<?php echo $def['actionCategoriesNews'] ?>" class="nav-link<?php if ($pqh[0] == $def['actionCategoriesNews']) echo ' active' ?>">
              <i class="fas fa-newspaper nav-icon"></i>
              <p><?php echo $lang['manageCategoryNews'] ?></p>
            </a>
          </li>
          <li class="nav-item<?php if ($pqh[0] == $def['actionNews']) echo ' menu-open'; ?>">
            <a href="?action=<?php echo $def['actionNews'] ?>" class="nav-link<?php if ($pqh[0] == $def['actionNews']) echo ' active' ?>">
              <i class="fas fa-newspaper nav-icon"></i>
              <p><?php echo $lang['manageNews'] ?></p>
            </a>
          </li>
          <li class="nav-item<?php if ($pqh[0] == $def['actionCategoriesOrder']) echo ' menu-open'; ?>">
            <a href="?action=<?php echo $def['actionCategoriesOrder'] ?>" class="nav-link<?php if ($pqh[0] == $def['actionCategoriesOrder']) echo ' active' ?>">
              <i class="fas fa-newspaper nav-icon"></i>
              <p><?php echo $lang['manageCategoryOrders'] ?></p>
            </a>
          </li>
          <li class="nav-item<?php if ($pqh[0] == $def['actionOrder']) echo ' menu-open'; ?>">
            <a href="?action=<?php echo $def['actionOrder'] ?>" class="nav-link<?php if ($pqh[0] == $def['actionOrder']) echo ' active' ?>">
              <i class="fas fa-newspaper nav-icon"></i>
              <p><?php echo $lang['manageOrders'] ?></p>
            </a>
          </li>
          <li class="nav-item<?php if ($pqh[0] == $def['actionTags']) echo ' menu-open'; ?>">
            <a href="?action=<?php echo $def['actionTags'] ?>" class="nav-link<?php if ($pqh[0] == $def['actionTags']) echo ' active' ?>">
              <i class="fas fa-tags nav-icon"></i>
              <p><?php echo $lang['manageTags'] ?></p>
            </a>
          </li>
          <li class="nav-item<?php if ($pqh[0] == $def['actionInfo']) echo ' menu-open'; ?>">
            <a href="?action=<?php echo $def['actionInfo'] ?>" class="nav-link<?php if ($pqh[0] == $def['actionInfo']) echo ' active' ?>">
              <i class="fas fa-info nav-icon"></i>
              <p><?php echo $lang['manageInformation'] ?></p>
            </a>
          </li>
          <!--
          <li class="nav-item has-treeview<?php if (in_array($pqh[0], $array_openaccount)) echo ' menu-open'; ?>">
            <a href="javascript:void(0);" class="nav-link">
                <i class="nav-icon fas fa-university"></i>
              <p><?php echo $lang['open_account_bank'] ?><i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $def['link_open_account_mb_bank'] ?>" class="nav-link<?php if ($pqh[0] == $def['link_open_account_mb_bank']) echo ' active' ?>">
                  <i class="fas fa-university nav-icon"></i>
                  <p><?php echo $lang['mb_bank'] ?></p>
                </a>
              </li>
            </ul>
          </li>
          -->
          <li class="nav-item has-treeview">
            <a href="<?php echo $def['link_logout'] ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p><?php echo $lang['logout']; ?></p>
            </a>
          </li>
        </ul>
      </nav>
      <div class="row">
      <?php 
        $pli = $h->getById($prefixTable."admins", $profileId);
        if ($pli['slogan'] != '') { ?>
        <div class="col-md-11 bg-white color-black mr-2 ml-2 small pb-3 pt-2 mt-2"><em><?php echo $pli['slogan'] ?></em></div>
      <?php } 
        if ($pli['image'] != '') {
      ?>
        <div class="col-md-11 bg-white color-black mr-2 ml-2"><img src="upload/admin/<?php echo $pli['image'] ?>" style="max-width: 100%;" /></div>
      <?php } ?>
      </div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>