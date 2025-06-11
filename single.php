<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

    <main id="main-content">
		<section class="simple-content pt-70">
			<div class="container-fluid">
				<span><?php echo get_the_date(); ?></span>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
    </main>

<?php get_footer(); ?>