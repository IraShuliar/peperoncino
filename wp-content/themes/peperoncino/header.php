<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">

	<script type="text/javascript">
		var ajax_url = '<?php echo admin_url("admin-ajax.php"); ?>';
	</script>

	<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> -->

	 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- begin page-header -->

	<header class="page-header">
		<div class="wrapper">
			<div class="page-header__left">
				<a href="<?php echo get_home_url();?>" class="page-header__logo">
					<?php if (is_front_page()) : ?>
						<img src="<?=get_template_directory_uri()?>/img/Logo_footer.png">
					<?php else : ?>
						<img src="<?=get_template_directory_uri()?>/img/Logo_color.png">
					<?php endif; ?>
				</a>
			</div>
			<div class="page-header__middle">
				<?php if (is_front_page()) : ?>
				
					<?php wp_nav_menu( array( 'container_class' => 'page-header__menu', 'theme_location' => 'header_menu' ) ); ?>

					<!-- <ul class="page-header__menu">
						<li>
							<a href="#">What we can do</a>
						</li>
						<li>
							<a href="#">Who we are</a>
						</li>
						<li>
							<a href="#">Where we are</a>
						</li>
						<li>
							<a href="#">What we think</a>
						</li>
					</ul> -->

				<?php else: ?>
					<a href="#" class="page-header__home-page-link">See How Awesome We Are</a>	
				<?php endif; ?>

			</div>
			<div class="page-header__right">
				<div class="page-header__language-switcher">
					<p>ENG</p>
					<ul>
						<li>
							<a href="#">PL</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="menu-wrp">
				<a href="#" class="menu">
					<img src="<?=get_template_directory_uri()?>/img/Hamburger_icon.png">
				</a>
			</div>
		</div>
	</header>

	<!-- end page-header -->


	<!-- begin page-content -->

	<main class="page-content clear">