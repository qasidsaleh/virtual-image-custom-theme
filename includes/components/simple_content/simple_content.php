<?php

    require __DIR__ . '/../../../includes/components/generic_classes.php';

    // $generic_classes get from above file
    if(!empty($generic_classes)){
        $generic_classes = implode(' ', $generic_classes);
    }
    $heading = get_sub_field('content_heading');
    $content = get_sub_field('content');
    $btn = get_sub_field('content_button');
?>

<section class="simple-content <?php echo $generic_classes; ?>">
    <div class="container-fluid">
        <div class="inner reveal-bottom">
            <?php if($heading){
                echo '<h2>'.$heading.'</h2>';
            } 
            echo $content;
            if($btn){
                echo '<div class="custom-btn mt-40">';
                include get_template_directory() . '/includes/buttons/btn-primary.php';
                echo '</div>';
            } ?>
        </div>
    </div>
</section>