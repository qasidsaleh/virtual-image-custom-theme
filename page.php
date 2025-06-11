<?php get_header(); ?>

	<main id="main-content">
		<?php
			if (have_rows('page_components')) :
				while (have_rows('page_components')) : the_row();
					render_component(get_row(true));
				endwhile;
			endif;
		?>
		<div class="container-fluid">
			<div class="content-area">
				<?php
					the_content();
				?>
			</div>
		</div>
	</main>

<?php get_footer(); ?>