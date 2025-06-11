<?php
    require __DIR__ . '/../../../includes/components/generic_classes.php';
    // $generic_classes get from above file
    if(!empty($generic_classes)){
        $generic_classes = implode(' ', $generic_classes);
    }

    $heading = get_sub_field('slider_heading');
    $content = get_sub_field('slider_content');
?>

<section id="slider" class="slider-block <?php echo $generic_classes; ?>">
    <div class="container-fluid">
        <?php if($heading || $content){ ?>
            <div class="pre">
                <?php if($heading){
                    echo '<h2>'.$heading.'</h2>';
                } 
                echo $content; ?>
            </div>
        <?php }
        if( have_rows('slides') ): ?>
            <div class="swiper swiper-slider">
                <div class="swiper-wrapper">
                    <?php while( have_rows('slides') ): the_row();
                        $image = get_sub_field('image');
                        $heading = get_sub_field('heading');
                        $content = get_sub_field('content');
                        $button = get_sub_field('button'); ?>
                        <div class="swiper-slide">
                            <?php 
                                display_image($image); 
                                if($heading){
                                    echo '<strong>'.$heading.'</strong>';
                                } 
                                if($content){ 
                                    echo '<p>'.$content.'</p>';
                                }
                                if($button){
                                    echo '<a href="'.$button['url'].'">'.$button['title'].'</a>'; 
                                } ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="slider-arrows">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>