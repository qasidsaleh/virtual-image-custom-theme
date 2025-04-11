<?php
    $heading = get_sub_field('hero_heading');
    $content = get_sub_field('hero_content');
    $hero_image = get_sub_field('hero_image');
    $hero_mobile_image = get_sub_field('hero_mobile_image');
?>

<section id="hero" class="hero">
    <div class="container-fluid">
        <div class="section-inner">
            <?php 
                if($hero_image){
                    echo '<div class="desktop-image">';
                    display_image($hero_image);
                    echo '</div>';
                } 
                if($hero_mobile_image){
                    echo '<div class="mobile-image">';
                    display_image($hero_mobile_image);
                    echo '</div>';
                } 
            ?>
            <div class="hero-caption">
                <?php if($heading){ 
                    echo '<h1>'.$heading.'</h1>';
                } if($content){ 
                    echo '<p>'.$content.'</p>';
                } ?>
            </div>
        </div>
    </div>
</section>