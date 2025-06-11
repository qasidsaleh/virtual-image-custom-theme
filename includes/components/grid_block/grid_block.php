<?php

    require __DIR__ . '/../../../includes/components/generic_classes.php';

    // $generic_classes get from above file
    if(!empty($generic_classes)){
        $generic_classes = implode(' ', $generic_classes);
    }
    $grid_layout = get_sub_field('grid_layout');
    $heading = get_sub_field('services_heading');
    $content = get_sub_field('services_content');
    $enable_pompom = get_sub_field('enable_pompom');
?>

<section class="services <?php echo $generic_classes; ?>">
    <div class="container-fluid">
        <div class="inner reveal-bottom">
            <?php if($heading){
                echo '<h2 class="mb-40">'.$heading.'</h2>';
            } 
            if($content){
                echo $content;
            }
            if( have_rows('blocks') ):
                $count = 1; ?>
                <div class="blocks <?php if($grid_layout){echo $grid_layout;} ?>">
                    <?php while( have_rows('blocks') ) : the_row();
                        $image = get_sub_field('image');
                        $heading = get_sub_field('heading');
                        $content = get_sub_field('content');
                        $link = get_sub_field('link');
                        if($grid_layout == 'col-2' || $enable_pompom){ ?>
                            <a href="<?php echo $link['url']; ?>" title="<?php echo $heading; ?>" class="block <?php if($enable_pompom){echo 'pompom';} ?>">
                        <?php } else { ?>
                            <div class="block">
                        <?php } ?>
                            <?php if($image && $grid_layout == 'col-2'){
                                display_image($image);
                            } ?>
                            <div class="content">
                                <?php if($grid_layout == 'col-4' && !$enable_pompom){ ?>
                                    <span class="count"><?php echo $count; ?></span>
                                <?php } else if($image && $grid_layout != 'col-2'){
                                    display_image($image);
                                } ?>
                                <h3><?php echo $heading; ?></h3>
                                <?php echo $content; ?>
                            </div>
                        <?php if($grid_layout == 'col-2' || $enable_pompom){ ?>
                            </a>
                        <?php } else { ?>
                            </div>
                        <?php }
                        $count++; 
                    endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>