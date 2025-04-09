<?php
    $banner_image = get_field('banner_image');
    $heading = get_field('heading');
?>

<section id="hero" class="hero">
    <div class="container">
        <div class="section-inner">
            <?php 
                if($banner_image){
                    display_image($banner_image);
                } 
                if($heading){ 
                    echo '<h1>'.$heading.'</h1>';
                } 
            ?>
        </div>
    </div>
</section>