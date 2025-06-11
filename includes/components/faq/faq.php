<?php

    require __DIR__ . '/../../../includes/components/generic_classes.php';

    // $generic_classes get from above file
    if(!empty($generic_classes)){
        $generic_classes = implode(' ', $generic_classes);
    }
    $heading = get_sub_field('faq_heading');
    $listing = get_sub_field('faq_listing');
    $enable_service_area = get_sub_field('enable_service_area');
    $service_areas_heading = get_field('service_areas_heading','options');
    $service_areas_content = get_field('service_areas_content','options');
?>

<section class="faq <?php echo $generic_classes; ?>">
    <div class="container-fluid">
        <div class="inner reveal-bottom">
            <div class="grid <?php if($enable_service_area){echo 'col-2';} ?>">
                <?php if( have_rows('faq_listing') ): ?>
                    <div class="listing mt-70">
                        <?php if($heading){
                            echo '<h2 class="mb-40">'.$heading.'</h2>';
                        } ?>
                        <?php while ( have_rows('faq_listing') ) : the_row();
                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer'); ?>
                            <div class="list">
                                <div class="question">
                                    <strong>Q: <?php echo $question; ?></strong>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                                <div class="answer">
                                    <?php echo $answer; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif;
                if($enable_service_area){ ?>
                    <div class="service-area">
                        <h2 class="mb-40"><?php echo $service_areas_heading; ?></h2>
                        <?php echo $service_areas_content; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>