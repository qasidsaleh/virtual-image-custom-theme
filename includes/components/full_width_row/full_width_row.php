<?php
    require __DIR__ . '/../../../includes/components/generic_classes.php';
    // $generic_classes get from above file
    $generic_classes = implode(' ', $generic_classes); // converting array to string
    $full_width_column = get_sub_field('full_width_column');
?>

<section class="full-width-column <?php echo $generic_classes; ?>">
    <div class="container">
    <i class="fa fa-address-card" aria-hidden="true"></i>
        <?php echo $full_width_column; ?>
    </div>
</section>