<?php
	$header_script = get_field('header_script', 'option');
	$top_body_script = get_field('top_body_script', 'option');
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

		<?php if ( is_admin_bar_showing() ) { ?>
			<style>
				body{
					min-height: calc(100vh - 32px);
				}
			</style>
		<?php } ?>
	</head>
	<body <?php body_class(); ?>>
	<?php if($top_body_script){echo $top_body_script;} ?>
        <div class="topbar">

        </div>
        <header id="header" class="header">
			<div id="topbar" class="topbar">
				<div class="section-inner">
					<a href="#" class="btn btn-primary">
						<span>Member Login</span>
						<svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_808_153)">
								<path d="M10.6167 5.97549V4.4066C10.6167 1.97417 8.61667 -0.00341797 6.15667 -0.00341797C3.69667 -0.00341797 1.7 1.97747 1.7 4.4099V5.93264C0.73 6.12051 0 6.92803 0 7.89045V12.9992C0 14.1396 0.85 14.9999 1.97667 14.9999H9.86667C11.04 14.9999 12 14.1034 12 12.9992V7.89045C12 6.96099 11.4367 6.21939 10.6167 5.97549ZM8.95 5.88979H3.36667V4.4066C3.36667 2.88386 4.62 1.64457 6.16 1.64457C7.7 1.64457 8.95333 2.88386 8.95333 4.4066V5.88979H8.95Z" fill="#F5F1F2"/>
							</g>
							<defs>
								<clipPath id="clip0_808_153">
									<rect width="12" height="15" fill="white"/>
								</clipPath>
							</defs>
						</svg>
					</a>
				</div>
			</div>
			<div class="navigation">
				<div class="container"></div>
			</div>
        </header>
