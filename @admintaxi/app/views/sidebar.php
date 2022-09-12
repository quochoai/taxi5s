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
          <li class="nav-item<?php if (in_array($pqh[0], $array_profile)) echo ' menu-open'; ?>">
            <a href="<?php echo $def['link_profile'] ?>" class="nav-link<?php if (in_array($pqh[0], $array_profile)) echo ' active' ?>">
              <i class="fas fa-user-tie nav-icon"></i>
              <p><?php echo $lang['manage_profiles'] ?></p>
            </a>
          </li>
          <li class="nav-item<?php if (in_array($pqh[0], $array_customer)) echo ' menu-open'; ?>">
            <a href="<?php echo $def['link_customer'] ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p><?php echo $lang['manage_customers'] ?></p>
            </a>
          </li>
          <li class="nav-item<?php if ($pqh[0] == $def['link_warehouse']) echo ' menu-open'; ?>">
            <a href="<?php echo $def['link_warehouse'] ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p><?php echo $lang['warehouse_customer']; ?></p>
            </a>
          </li>
          <li class="nav-item<?php if ($pqh[0] == $def['check-cic']) echo ' menu-open'; ?>">
            <a href="<?php echo $def['check-cic'] ?>" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p><?php echo $lang['check_cic'] ?></p>
            </a>
          </li>
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
              <li class="nav-item">
                <a href="<?php echo $def['link_open_account_ocb'] ?>" class="nav-link<?php if ($pqh[0] == $def['link_open_account_ocb']) echo ' active' ?>">
                  <i class="fas fa-university nav-icon"></i>
                  <p><?php echo $lang['ocb_omni'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_kyc_app'] ?>" class="nav-link<?php if ($pqh[0] == $def['link_kyc_app']) echo ' active'; ?>">
                  <i class="nav-icon fas fa-check"></i>
                  <p>KYC App</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item<?php if ($pqh[0] == $def['link_introduce_customer']) echo ' menu-open'; ?>">
            <a href="<?php echo $def['link_introduce_customer'] ?>" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p><?php echo $lang['manage_introduce_customer'] ?></p>
            </a>
          </li>
          <!--
          <li class="nav-item<?php if ($pqh[0] == $def['check-duplicate']) echo ' menu-open'; ?>">
            <a href="<?php echo $def['check-duplicate'] ?>" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p><?php echo $lang['check_duplicate'] ?></p>
            </a>
          </li>
          -->
          <li class="nav-item has-treeview<?php if (in_array($pqh[0], $array_search)) echo ' menu-open'; ?>">
            <a href="javascript:void(0);" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
              <p><?php echo $lang['search_info'] ?><i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $def['link_seach_info_fecredit'] ?>" class="nav-link<?php if ($pqh[0] == $def['link_seach_info_fecredit']) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p>FE Credit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_seach_info_hdsaison'] ?>" class="nav-link<?php if ($pqh[0] == $def['link_seach_info_hdsaison']) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p>HD Saison</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview<?php if (in_array($pqh[0], $array_lookup) || in_array($pqh[0], $array_province)) echo ' menu-open'; ?>">
            <a href="javascript:void(0);" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
              <p><?php echo $lang['manage_lookup'] ?><i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/1" class="nav-link<?php if ($pqh[1] == 1) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['lookup_marriage'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/2" class="nav-link<?php if ($pqh[1] == 2) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['lookup_education'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/3" class="nav-link<?php if ($pqh[1] == 3) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['lookup_ownerplace'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/4" class="nav-link<?php if ($pqh[1] == 4) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['lookup_purpose'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/5" class="nav-link<?php if ($pqh[1] == 5) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['lookup_tctd'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/6" class="nav-link<?php if ($pqh[1] == 6) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['lookup_product'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/7" class="nav-link<?php if ($pqh[1] == 7) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['lookup_income_source'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/8" class="nav-link<?php if ($pqh[1] == 8) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['lookup_bank'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/20" class="nav-link<?php if ($pqh[1] == 20) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['lookup_app'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/9" class="nav-link<?php if ($pqh[1] == 9) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['lookup_customer_source'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/10" class="nav-link<?php if ($pqh[1] == 10) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['lookup_customer_status'] ?></p>
                </a>
              </li>
              <li class="nav-item has-treeview<?php if (in_array($pqh[0], $array_lookup) && in_array($pqh[1], $array_status_process) && in_array($pqh[1], $array_ttxl)) echo ' menu-open'; ?>">
                <a href="javascript:void(0);" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                  <p><?php echo $lang['lookup_process_status'] ?><i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $def['link_lookup'] ?>/15" class="nav-link<?php if ($pqh[1] == 15) echo ' active' ?>">
                      <i class="fas fa-search nav-icon"></i>
                      <p>Admin</p>
                    </a>
                  </li>  
                  <li class="nav-item">
                    <a href="<?php echo $def['link_lookup'] ?>/19" class="nav-link<?php if ($pqh[1] == 19) echo ' active' ?>">
                      <i class="fas fa-search nav-icon"></i>
                      <p>Head UW</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $def['link_lookup'] ?>/11" class="nav-link<?php if ($pqh[1] == 11) echo ' active' ?>">
                      <i class="fas fa-search nav-icon"></i>
                      <p>Head</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $def['link_lookup'] ?>/13" class="nav-link<?php if ($pqh[1] == 13) echo ' active' ?>">
                      <i class="fas fa-search nav-icon"></i>
                      <p>Telesale</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $def['link_lookup'] ?>/14" class="nav-link<?php if ($pqh[1] == 14) echo ' active' ?>">
                      <i class="fas fa-search nav-icon"></i>
                      <p>Courier</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $def['link_lookup'] ?>/18" class="nav-link<?php if ($pqh[1] == 18) echo ' active' ?>">
                      <i class="fas fa-search nav-icon"></i>
                      <p>CTV</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview<?php if (in_array($pqh[0], $array_lookup) && in_array($pqh[1], $array_status_process_kyc_app) && in_array($pqh[1], $array_ttxl)) echo ' menu-open'; ?>">
                <a href="javascript:void(0);" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                  <p><?php echo $lang['lookup_process_status'] ?> KYC<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo $def['link_lookup'] ?>/21" class="nav-link<?php if ($pqh[1] == 21) echo ' active' ?>">
                      <i class="fas fa-search nav-icon"></i>
                      <p>Admin</p>
                    </a>
                  </li>  
                  <li class="nav-item">
                    <a href="<?php echo $def['link_lookup'] ?>/22" class="nav-link<?php if ($pqh[1] == 22) echo ' active' ?>">
                      <i class="fas fa-search nav-icon"></i>
                      <p>Head UW</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $def['link_lookup'] ?>/23" class="nav-link<?php if ($pqh[1] == 23) echo ' active' ?>">
                      <i class="fas fa-search nav-icon"></i>
                      <p>Head</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $def['link_lookup'] ?>/24" class="nav-link<?php if ($pqh[1] == 24) echo ' active' ?>">
                      <i class="fas fa-search nav-icon"></i>
                      <p>Telesale</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $def['link_lookup'] ?>/25" class="nav-link<?php if ($pqh[1] == 25) echo ' active' ?>">
                      <i class="fas fa-search nav-icon"></i>
                      <p>Courier</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo $def['link_lookup'] ?>/26" class="nav-link<?php if ($pqh[1] == 26) echo ' active' ?>">
                      <i class="fas fa-search nav-icon"></i>
                      <p>CTV</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/12" class="nav-link<?php if ($pqh[1] == 12) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['lookup_profile_status'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/16" class="nav-link<?php if ($pqh[1] == 16) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['mobi_provider'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_lookup'] ?>/17" class="nav-link<?php if ($pqh[1] == 17) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['rating_customer'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_province'] ?>" class="nav-link<?php if (in_array($pqh[0], $array_province)) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i>
                  <p><?php echo $lang['manage_province'] ?></p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item<?php if ($pqh[0] == $def['link_rate_loan']) echo ' menu-open'; ?>">
            <a href="<?php echo $def['link_rate_loan'] ?>" class="nav-link<?php if ($pqh[0] == $def['link_rate_loan']) echo ' active' ?>">
              <i class="fas fa-percent nav-icon"></i>
              <p><?php echo $lang['rate_loan_title'] ?></p>
            </a>
          </li>
          <li class="nav-item has-treeview<?php if (in_array($pqh[0], $array_transaction)) echo ' menu-open'; ?>">
            <a href="javascript:void(0);" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
              <p><?php echo $lang['transaction'] ?><i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $def['link_transaction'] ?>" class="nav-link<?php if ($pqh[0] == $def['link_transaction']) echo ' active' ?>">
                  <i class="fas fa-battery-half nav-icon"></i><p><?php echo $lang['list_recharge'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_log_transaction_from_mbbank_api'] ?>" class="nav-link<?php if ($pqh[0] == $def['link_log_transaction_from_mbbank_api']) echo ' active' ?>">
                  <i class="fas fa-battery-half nav-icon"></i><p><?php echo $lang['log_mbbank_api'] ?></p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="<?php echo $def['link_history_transaction'] ?>" class="nav-link<?php if ($pqh[0] == $def['link_history_transaction']) echo ' active' ?>">
                  <i class="fas fa-search nav-icon"></i><p><?php echo $lang['history_transaction'] ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $def['link_package'] ?>" class="nav-link<?php if ($pqh[0] == $def['link_package']) echo ' active' ?>">
                  <i class="fas fa-cube nav-icon"></i><p><?php echo $lang['manage_package'] ?></p>
                </a>
              </li>    
            </ul>
          </li>
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
        $pli = $h->getById($id_profile, "profiles");
        if ($pli['slogan'] != '') { ?>
        <div class="col-md-11 bg-white color-black mr-2 ml-2 small pb-3 pt-2 mt-2"><em><?php echo $pli['slogan'] ?></em></div>
      <?php } 
        if ($pli['image'] != '') {
      ?>
        <div class="col-md-11 bg-white color-black mr-2 ml-2"><img src="upload/profile/<?php echo $pli['image'] ?>" style="max-width: 100%;" /></div>
      <?php } ?>
      </div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>