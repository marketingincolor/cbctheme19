<div class="top-header teal-bg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 text-center">
        <?php echo get_field('top_header','options'); ?>
      </div>
      <div class="col-sm-3 text-right" style="display:none;">
        <?php wp_nav_menu( array(
          'theme_location'  => 'cart',
          'menu_class'    =>  'list-inline divided-menu',
          'container'       => 'nav',
          'container_class' => 'col-xs-12',
          'depth'     =>  0,
          'fallback_cb' =>  false,
          'walker'      =>  new dei_Nav_Walker
          )); 
         // see 'inc/nav-walker.php' to alter output.  Default uses the title as the font-awesome icon class, the fa- is already added
          ?>
      </div>
    </div>
  </div>
</div>

<div id="logo-mobile" class="hidden-md hidden-lg">
  <div class="container-fluid text-center" >
    <a href="<?php echo esc_url( home_url( '/' ) );?>" rel="home" itemprop="url">
      <?php 
        // custom logo upload, upload and crop logo in 'Customize' screen
        // edit cropping dimensions in functions.php line 9-14
      the_custom_logo(); ?>
    </a>
  </div> 
</div>

<div class="nav-color">
  <div class="container not-fluid">
  	<nav class="navbar">
      <div class="navbar-header"> 
        <a class="hidden-xs hidden-sm navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>" rel="home" itemprop="url">
          <?php 
        // custom logo upload, upload and crop logo in 'Customize' screen
        // edit cropping dimensions in functions.php line 9-14
          the_custom_logo(); ?>
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse">
        <?php wp_nav_menu( array(
          'theme_location'  => 'cart',
          'menu_class'    =>  'nav navbar-nav',
          'container'       => '',
          'depth'     =>  0,
          'fallback_cb' =>  false,
          'walker'      =>  new dei_Nav_Walker
          )); 
         // see 'inc/nav-walker.php' to alter output.  Default uses the title as the font-awesome icon class, the fa- is already added
          ?>
        <?php wp_nav_menu( array(
           'theme_location'	=> 'primary',
           'menu_class'		=>	'nav navbar-nav',
           'container'       => '',
           'depth'			=>	0,
           'fallback_cb'	=>	false,
           'walker'			=>	new dei_Nav_Walker
           )); // generates the ul
          ?>

      </div><!--/.navbar-collapse -->

  	</nav><!-- navbar -->
  </div>
</div>