<?php

    require __DIR__ . '/../../../includes/components/generic_classes.php';

    // $generic_classes get from above file
    if(!empty($generic_classes)){
        $generic_classes = implode(' ', $generic_classes);
    }
    $heading = get_sub_field('video_heading');
    $video = get_sub_field('video_file');
?>

<section class="video <?php echo $generic_classes; ?>">
    <div class="container-fluid">
        <div class="inner reveal-bottom">
            <?php if($heading){
                echo '<h2 class="mb-40">'.$heading.'</h2>';
            } ?>
            <video width="320" height="240" controls>
                <source src="<?php echo $video['url']; ?>" title="<?php echo $video['title']; ?>" type="video/mp4">
            </video>
        </div>
    </div>
</section>