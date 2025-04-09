<?php
    $heading = get_field('grid_heading');
    $content = get_field('grid_content');
    $image = get_field('grid_image');
?>

<section id="grid-block" class="grid-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-items-center">
                <?php if($image){display_image($image);} ?>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <?php if($heading){echo '<h2 class="d-flex align-items-center">'.$heading.'</h2>';} ?>
            </div>
        </div>
    </div>
</section>