<?php
    $heading = get_sub_field('slider_heading');
    $content = get_sub_field('slider_content');
?>

<section id="slider" class="slider">
    <div class="container-fluid">
        <?php if($heading || $content){ ?>
            <div class="pre">
                <?php if($heading){
                    echo '<h2>'.$heading.'</h2>';
                } 
                echo $content; ?>
            </div>
        <?php } ?>
        <div class="swiper swiper-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>