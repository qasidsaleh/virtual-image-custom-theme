<?php

    require __DIR__ . '/../../../includes/components/generic_classes.php';

    // $generic_classes get from above file
    if(!empty($generic_classes)){
        $generic_classes = implode(' ', $generic_classes);
    }
    $col1_heading = get_sub_field('column1_heading');
    $col2_heading = get_sub_field('column2_heading');
    $column2_content = get_sub_field('column2_content');
    $address = get_field('address','options');
    $address_link = get_field('address_link','options');
    $phone = get_field('phone','options');
    $email = get_field('email','options');
    $timing = get_field('timing','options');
    $enable_form = get_sub_field('enable_form');
    if($enable_form){
        $form_heading = get_sub_field('form_heading');
        $form_shortcode = get_sub_field('form_shortcode');
    }
?>

<section class="contact-info <?php echo $generic_classes; ?>">
    <div class="container-fluid">
        <div class="inner reveal-bottom">
            <div class="grid">
                <div class="column">
                    <?php if($col1_heading){ ?>
                        <h2><?php echo $col1_heading; ?></h2>
                    <?php } ?>
                    <div class="info">
                        <?php if($address){ ?>
                            <div class="block">
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                <a href="<?php echo $address_link; ?>" target="_blank" title="<?php echo $address; ?>"><?php echo $address; ?></a>
                            </div>
                        <?php }
                        if($timing){ ?>
                            <div class="block">
                                <i class="fa fa-clock" aria-hidden="true"></i>
                                <span><?php echo $timing; ?></span>
                            </div>
                        <?php }
                        if($phone){ ?>
                            <div class="block">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                            </div>
                        <?php }
                        if($email){ ?>
                            <div class="block">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="column">
                    <?php if($col2_heading){ ?>
                        <h2><?php echo $col2_heading; ?></h2>
                    <?php }
                    if($column2_content){
                        echo $column2_content;
                    } ?>
                </div>
            </div>
            <?php if($enable_form){ ?>
                <div class="form-area">
                    <?php if($form_heading){ ?>
                        <h2><?php echo $form_heading; ?></h2>
                    <?php } ?>
                    <?php if($form_shortcode){
                        echo do_shortcode($form_shortcode);
                    } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>