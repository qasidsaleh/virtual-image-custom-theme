<?php
	$header_script = get_field('header_script', 'option');
	$top_body_script = get_field('top_body_script', 'option');
	$logo = get_field('logo','options');
	$phone = get_field('phone','options');
	$address = get_field('address','options');
	$top_btn = get_field('top_custom_button','options');
?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>

		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
		
		<?php if($header_script){echo $header_script;} ?>

		<div class="nav-shortcuts" title="skip links">
			<a href="#main-content">skip to content</a>
			<a href="#footer">skip to footer</a>
		</div>

	</head>
	<body <?php body_class(); ?>>
	<?php if($top_body_script){echo $top_body_script;} ?>
        <header id="header" class="header">
			<!-- Navigation Area -->
			<div class="navigation">
				<div class="container-fluid">
					<div class="inner">
						<!-- Logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>" aria-label="link to homepaga" title="Logo">
								<?php display_image($logo); ?>
							</a>
						</div>
						<!-- Menu -->
						<div class="header-right">
							<nav class="main-nav">
								<?php
									echo str_replace( '<li class="', '<li class="',
										wp_nav_menu( array(
										'container'       => true,
										'theme_location' => 'header-menu',
										'items_wrap'      => '<ul id="main-menu">%3$s</ul>',
										'menu_class' => ''
									)));
								?>
							</nav>
						</div>
						<!-- Hamburger -->
						<button class="hamburger mobile-buttons" aria-controls="primary-navigation"  aria-label="Primary Navigation" aria-expanded="false">
							<svg fill="var(--button-color)" viewBox="0 0 100 100" width="250">
								<rect class="line top" width="80" height="4" x="10" y="28" rx="5"></rect>
								<rect class="line middle" width="80" height="4" x="10" y="48" rx="5"></rect>
								<rect class="line bottom" width="80" height="4" x="10" y="68" rx="5"></rect>
							</svg>
						</button>
						<?php if($top_btn){
							$btn = $top_btn; ?>
							<div class="custom-button">
								<?php include get_template_directory() . '/includes/buttons/btn-primary.php'; ?>
							</div>
						<?php } ?>	
					</div>
				</div>
			</div>
        </header>
