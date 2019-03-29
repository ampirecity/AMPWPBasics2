<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name') ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="#top" class="header container light-header">
        
        <!-- Back to home logo -->
        <div class="amp-logo">
        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        		<amp-img class="home-button" src="<?php bloginfo('stylesheet_directory') ?>/images/safari-logo.png" width="150" height="70" alt="safari.lt logotype"></amp-img>
	        </a>
	    </div>

	    <!-- Hamburger and Contact number -->
	        <div class="header__content">
	            <a class="display-desktop menu__phone" href="tel:+37068655531"><h4>+370 686 55 531</h4></a>
	            <div role="button" on="tap:sidebar.toggle" tabindex="0" class="hamburger">
		            <span></span>
		            <span></span>
		            <span></span>
		        </div>
	        </div>

        <div class="clearfix"></div>
    
</header>

<!-- AMP-Sidebar -->
<amp-sidebar id="sidebar" layout="nodisplay" side="right">
  <div role="button" aria-label="close sidebar" on="tap:sidebar.toggle" tabindex="0" class="close-sidebar">✕</div>
    <div class="amp-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        	<amp-img class="home-button" src="<?php bloginfo('stylesheet_directory') ?>/images/safari-logo.png" width="190" height="87" alt="safari.lt logotype"></amp-img>
	    </a>
	</div>

    <?php wp_nav_menu(array('theme_location' => 'amp-sidebar-menu', 'container_class' => 'sidebar')); ?>
</div>

<!-- Copyright and Credits -->
<div class="copyright">
    <p><?php _e('© 2019 Safari.lt All rights reserved.', 'safari');?></p>  
    <p><?php _e('Created by', 'safari');?><a href="http://webpark.lt"> webpark.lt</a></p>          
</div>
</amp-sidebar>

<div class="content-wrapper container">
	<div class="content__segment">

		<?php if (is_front_page()) { } else {
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('
				<p id="breadcrumbs">','</p>');
			}};
		?>

	</div>