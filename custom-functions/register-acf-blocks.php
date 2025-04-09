<?php
/**************************************
	  CUSTOM BLOCK REGISTRATION
 **************************************/

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

		// register a hero block.
		acf_register_block_type(
			array(
				'name' => 'hero',
				'title' => __('Hero'),
				'description' => __('A custom hero block.'),
				'render_template' => 'includes/components/hero/hero.php',
				'category' => 'formatting',
				'icon' => 'admin-comments',
				'keywords' => array( 'hero' ),
			),
		);

		// register a grid block.
		acf_register_block_type(
			array(
				'name' => 'grid',
				'title' => __('Grid'),
				'description' => __('A custom grid block.'),
				'render_template' => 'includes/components/grid/grid.php',
				'category' => 'formatting',
				'icon' => 'admin-comments',
				'keywords' => array( 'grid' ),
			),
		);
    }
}
?>