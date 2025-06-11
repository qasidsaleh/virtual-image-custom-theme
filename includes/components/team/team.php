<?php
    require __DIR__ . '/../../../includes/components/generic_classes.php';

    // $generic_classes get from above file
    if(!empty($generic_classes)){
        $generic_classes = implode(' ', $generic_classes);
    }
    $heading = get_field('team_heading','options');
    $content = get_field('team_content','options');
    $custom_content = get_sub_field('team_custom_content'); // Specific page content
?>
<section class="team-section <?php echo $generic_classes; ?>">
    <div class="container-fluid reveal-bottom">
        <?php if($heading){ ?>
            <h2 class="mb-40"><?php echo $heading; ?></h2>
        <?php }
        if($custom_content){
            echo $custom_content;
        } else {
            echo $content;
        }
        if( have_rows('members','options') ): ?>
            <div class="members">
                <?php while( have_rows('members','options') ) : the_row();
                    $name = get_sub_field('name');
                    $desc = get_sub_field('description');
                    $image = get_sub_Field('image'); ?>
                    <div class="block">
                        <?php if($image){
                            display_image($image);
                        } ?>
                        <div class="content">
                            <?php if($name){ ?>
                                <h3><?php echo $name; ?></h3>
                            <?php }
                            echo $desc; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>