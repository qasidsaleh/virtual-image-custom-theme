<?php
    $heading = get_sub_field('hero_heading');
    $content = get_sub_field('hero_content');
    $banner_image = get_sub_field('hero_image');
?>

<section id="hero" class="hero">
    <div class="container">
        <div class="section-inner">
            <?php 
                if($banner_image){
                    display_image($banner_image);
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