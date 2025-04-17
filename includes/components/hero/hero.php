<?php
    $heading = get_sub_field('hero_heading');
    $content = get_sub_field('hero_content');
    $hero_image = get_sub_field('hero_image');
    $hero_mobile_image = get_sub_field('hero_mobile_image');
    $hide_desktop_image_for_mobile = '';
    $hide_mobile_image_for_desktop = '';
    if($hero_mobile_image){
        $hide_desktop_image_for_mobile = 'hide-mobile';
        $hide_mobile_image_for_desktop = 'hide-desktop';
    }
?>

<section id="hero" class="hero">
    <div class="section-inner">
        <?php 
            if($hero_image){
                echo '<div class="desktop-image '.$hide_desktop_image_for_mobile.'">';
                display_image($hero_image);
                echo '</div>';
            } 
            if($hero_mobile_image){
                echo '<div class="mobile-image '.$hide_mobile_image_for_desktop.'">';
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
</section>