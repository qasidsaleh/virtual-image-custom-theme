<?php

    require __DIR__ . '/../../../includes/components/generic_classes.php';

    // $generic_classes get from above file
    if(!empty($generic_classes)){
        $generic_classes = implode(' ', $generic_classes);
    }
    $col1_option = get_sub_field('column_1');
    $col2_option = get_sub_field('column_2');

?>

<section class="grid-section <?php echo $generic_classes; ?>">
    <div class="container-fluid">
        <div class="grid reveal-bottom">
            <div class="grid-item">
                <?php 
                    $heading = $col1_option['grid_heading'];
                    $content = $col1_option['grid_content'];
                    $listing = $col1_option['grid_listing'];
                    if($heading){ ?>
                        <h2 class="large uppercase"><?php echo $heading; ?></h2>
                    <?php }
                    echo $content;
                    echo '<div class="listing">';
                    foreach($listing as $list){
                        $heading = $list['heading'];
                        $content = $list['content'];
                        if($heading){
                            echo '<strong>'.$heading.'</strong>';
                        }
                        echo $content;
                    }
                    echo '</div>';
                ?>
            </div>
            <div class="grid-item">
                <div class="images">
                    <?php 
                        $images = $col2_option['grid_images'];
                        foreach($images as $image){
                            $image = $image['image'];
                            if($image){
                                display_image($image);
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>