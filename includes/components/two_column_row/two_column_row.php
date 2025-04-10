<?php
    $first_column = get_sub_field('first_column');
    $second_column = get_sub_field('second_column');
?>

<section class="two-column-row">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php echo $first_column; ?>
            </div>
            <div class="col-12 col-md-6">
                <?php echo $second_column; ?>
            </div>
        </div>
    </div>
</section>