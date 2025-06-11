<?php
    $heading = get_sub_field('hero_heading');
    $subheadinig = get_sub_field('hero_sub_heading');
    $hero_image = get_sub_field('hero_image');
    $enable_google_map = get_sub_field('enable_google_map');
    $google_map = get_field('google_map','options');
?>

<section id="hero" class="hero">
<<<<<<< HEAD
    <div class="container-fluid">
        <div class="inner">
            <div class="hero-image reveal-bottom">
                <?php 
                    if($enable_google_map){
                        echo $google_map;
                    } else if($hero_image){
                        display_image($hero_image);
                    } 
                ?>
            </div>
            <div class="hero-caption reveal-left">
                <?php if($heading){ 
                    echo '<h1 class="uppercase">'.$heading.'</h1>';
                }
                if($subheadinig){ ?>
                    <span><?php echo $subheadinig; ?></span>
                <?php } ?>
            </div>
=======
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
>>>>>>> e97dcdd3578e934c957d69af53c709ab1d414c61
        </div>
    </div>
</section>