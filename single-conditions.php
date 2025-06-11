<!-- This template shows single services pages -->
<?php get_header(); ?>

	<main id="main-content">
		<?php
			if (have_rows('page_components')) :
				while (have_rows('page_components')) : the_row();
					render_component(get_row(true));
				endwhile;
			endif;
		?>
	</main>

<?php get_footer(); ?>