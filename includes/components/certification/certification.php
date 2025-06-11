<?php

    require __DIR__ . '/../../../includes/components/generic_classes.php';

    // $generic_classes get from above file
    if(!empty($generic_classes)){
        $generic_classes = implode(' ', $generic_classes);
    }
    $heading = get_sub_field('certification_heading');
    $content = get_sub_field('certification_content');
?>

<section class="certifications <?php echo $generic_classes; ?>">
    <div class="container-fluid">
        <div class="inner reveal-bottom">
            <?php if($heading){
                echo '<h2 class="mb-20">'.$heading.'</h2>';
            } 
            if($content){
                echo $content;
            } 
            if( have_rows('images') ): ?>
                <div class="images mt-70">
                    <?php while ( have_rows('images') ) : the_row();
                        $heading = get_sub_field('heading');
                        $image = get_sub_field('image'); ?>
                        <div class="certificate">
                            <?php if($heading){
                                echo '<span>'.$heading.'</span>';
                            }
                            if($image){
                                display_image($image);
                            } ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>