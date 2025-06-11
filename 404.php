<?php 
get_header(); ?>

	<main id="main-content">
		<section class="404 pt-70 pb-70">
			<div class="container-fluid">
                <h1 class="simple">404 - Page not found</h1>
                <div class="desc">
                    <p>Sorry, the page you were looking for may no longer exist.<br><a href="<?php echo get_home_url(); ?>" class="btn btn-secondary">Click here to visit our homepage.</a></p>
                </div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>