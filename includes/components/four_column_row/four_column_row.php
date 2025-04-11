<?php
    $first_column = get_sub_field('first_column');
    $second_column = get_sub_field('second_column');
    $third_column = get_sub_field('third_column');
    $fourth_column = get_sub_field('fourth_column');
?>

<section class="four-column-row">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <?php echo $first_column; ?>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <?php echo $second_column; ?>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <?php echo $third_column; ?>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <?php echo $fourth_column; ?>
            </div>
        </div>
    </div>
</section>