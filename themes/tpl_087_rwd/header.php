<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="<?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('description'); ?>">
<title><?php global $page, $paged;
  wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'tpl_087_rwd' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/css3-mediaqueries.js"></script>
<![endif]-->
<?php wp_head(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery1.4.4.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
</head>
<body>
  <header id="header" role="banner">
		<h1><?php bloginfo( 'description' ); ?></h1>

		<div class="logo">
		  <a href="<?php echo home_url(); ?>" title="G−CLOUD"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="G-CLOUD"></a>	
		  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php tpl_087_rwd_print_Logo_name(); ?>
      <?php tpl_087_rwd_print_Logo_slogan(); ?>
      </a>
		</div>
    <div class="info">
    	<?php tpl_087_rwd_print_tel(); ?>
    	<?php tpl_087_rwd_print_open_time(); ?>
    </div>
	</header>

  <nav id="mainNav">
  	<div class="inner">
    <a class="menu" id="menu"><span>MENU</span></a>
		<div class="panel">   
    <?php wp_nav_menu( array( 'container' => '', 'items_wrap' => '<ul>%3$s</ul>','theme_location'=>'primary','walker' => new description_walker()) );?>
    </div>
    </div>
  </nav>

<div id="wrapper">

<?php if (is_front_page()):
$header_image = get_header_image();
if ($header_image):?>
  <div id="mainBanner" class="mainImg">
  	<div class="inner">
		<?php tpl_087_rwd_print_mainImgLink();?><img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php bloginfo( 'description' ); ?>"><?php tpl_087_rwd_print_mainImgLinkClose();?>
    <div class="slogan">
    <?php tpl_087_rwd_print_mainImgslogan() ?>
    <?php tpl_087_rwd_print_mainImgslogan2(); ?>
    </div>
    </div>
  </div>
<?php endif;endif;?>