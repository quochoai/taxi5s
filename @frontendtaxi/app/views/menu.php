<header>
	<nav class="navbar" role="navigation">
    <div class="container-full">
      <div class="navbar-header nav-head">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <img alt="<?php _e($conf['title']) ?>" alt="<?php _e($conf['title']) ?>"src="assets/images/icon-menu.png" id="icon-menu">
        </button>
        <a class="navbar-brand" href="<?php _e(_url) ?>"><img alt="<?php _e($conf['title']) ?>"id="logo" src="<?php _e($imgLogo) ?>"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
          <ul class="nav navbar-nav">
            <li><a href="<?php _e(_url) ?>"<?php echo (!isset($_REQUEST['pqh'])) ? ' class="active"' : '' ?>><?php _e($lang['homeText']) ?></a></li>
            <li><a href="<?php _e($def['actionOrder']) ?>"<?php (isset($_REQUEST['pqh']) && $mod[0] == $def['actionOrder']) ? _e(' class="active"') : '' ?>><?php _e($lang['orderText']) ?></a></li>
            <li><a href="<?php _e($def['actionNews']) ?>"<?php (isset($_REQUEST['pqh']) && $mod[0] == $def['actionNews']) ? _e(' class="active"') : '' ?>><?php _e($lang['newsText']) ?></a></li>
            <li><a href="<?php _e($def['actionRegister']) ?>"><?php _e($lang['registerText']) ?></a></li>
          </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
</header>