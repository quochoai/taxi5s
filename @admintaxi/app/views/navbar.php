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
        <a class="dropdown-item changePassword cursorPointer" rel="<?php _e($profileId) ?>"><i class="far fa-unlock-alt"></i> <?php echo $lang['changePassword'] ?></a>
      </div>
      <!--
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="<?php echo $def['link_update_profile'] . '/' . $id_profile ?>" class="dropdown-item"><i class="fas fa-edit"></i> <?php echo $lang['update_information'] ?></a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo $def['link_change_password'] ?>/<?php echo $id_profile ?>" class="dropdown-item">
              <i class="fas fa-key"></i> <?php echo $lang['change_password'] ?>
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo $def['link_support'] ?>" class="dropdown-item">
              <i class="fas fa-question"></i> <?php echo $lang['support_how_to_use'] ?>
          </a>
          
              <div class="dropdown-divider"></div>
              <a href="<?php echo $def['link_point_setting'] ?>" class="dropdown-item">
                  <i class="fas fa-cogs"></i> <?php echo $lang['point_setting'] ?>
              </a>
              <div class="dropdown-divider"></div>
              <a href="javascript:void(0)" class="dropdown-item" id="edit_cic">
                  <i class="fas fa-cogs"></i> Cài đặt tài khoản CIC
              </a>
              <div class="dropdown-divider"></div>
              <a href="javascript:void(0)" class="dropdown-item" id="edit_fec">
                  <i class="fas fa-cogs"></i> Cài đặt tài khoản FeCredit
              </a>                      
              <div class="dropdown-divider"></div>
              <a href="javascript:void(0)" class="dropdown-item" id="edit_check_duplicate">
                <i class="fas fa-cogs"></i> Cài đặt tài khoản Check Duplicate
              </a>         
              <div class="dropdown-divider"></div>
              <a href="<?php echo $def['link_seting_login_fb'] ?>" class="dropdown-item">
                  <i class="fas fa-cogs"></i> Setting Login Facebook
              </a>
              <div class="dropdown-divider"></div>
              <a href="javascript:void(0)" class="dropdown-item" id="edit_import_assign">
                  <i class="fas fa-cogs"></i> Cài đặt import, phân công
              </a>
          
      </div>
-->
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?action=<?php echo $def['logout'] ?>" title="<?php echo $lang['logout']; ?>"><i class="fas fa-sign-out-alt"></i></a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
  