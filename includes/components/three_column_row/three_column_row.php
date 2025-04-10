<?php
    $first_column = get_sub_field('first_column');
    $second_column = get_sub_field('second_column');
    $third_column = get_sub_field('third_column');
?>

<section class="three-column-row">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <?php echo $first_column; ?>
            </div>
            <div class="col-12 col-lg-4">
                <?php echo $second_column; ?>
            </div>
            <div class="col-12 col-lg-4">
                <?php echo $third_column; ?>
            </div>
        </div>
    </div>
</section>