<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimumscale=
1.0, maximum-scale=1.0" />
<title><?php echo get_my_title_tag(); ?> </title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" >


<!--Start wp head-->

<?php wp_head()?>


<!--End wp head-->

</head>



<body <?php body_class();?>>






<header>


</header>

<div class="nav-box">
<div class="jquery-nav">
				<h4 class="jquery-title"><a href="#">Menu<div class="menu-icon"><img src="<?php bloginfo('template_url'); ?>/images/menu-icon-large.png"></div></a></h4>
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</div>

</div>


<div class="wrapper">

	
