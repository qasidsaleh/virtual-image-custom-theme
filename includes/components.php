<?php
function render_component($component, $index = 0) {
    $slug = $component['acf_fc_layout'];
    $component_path = get_template_directory() . "/includes/components/{$slug}/{$slug}.php";

    if (file_exists($component_path)) {
        include $component_path;
    } else {
        echo "<!-- Component file not found: $slug -->";
    }
}
?>