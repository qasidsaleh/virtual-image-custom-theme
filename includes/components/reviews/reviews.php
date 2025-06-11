<?php

    require __DIR__ . '/../../../includes/components/generic_classes.php';

    // $generic_classes get from above file
    if(!empty($generic_classes)){
        $generic_classes = implode(' ', $generic_classes);
    }
    $heading = get_sub_field('reviews_heading');
    $shortcode = get_field('reviews_shortcode','options');
?>

<section class="reviews <?php echo $generic_classes; ?>">
    <div class="container-fluid">
        <div class="inner reveal-bottom">
            <?php if($heading){
                echo '<h2 class="mb-40">'.$heading.'</h2>';
            } 
            if($shortcode){
                echo do_shortcode($shortcode);
            } ?>
        </div>
    </div>
</section>