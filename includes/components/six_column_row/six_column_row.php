<?php
    $first_column = get_sub_field('first_column');
    $second_column = get_sub_field('second_column');
    $third_column = get_sub_field('third_column');
    $fourth_column = get_sub_field('fourth_column');
    $five_column = get_sub_field('five_column');
    $six_column = get_sub_field('six_column');
?>

<section class="four-column-row">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                <?php echo $first_column; ?>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                <?php echo $second_column; ?>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                <?php echo $third_column; ?>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                <?php echo $fourth_column; ?>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                <?php echo $five_column; ?>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-2">
                <?php echo $six_column; ?>
            </div>
        </div>
    </div>
</section>