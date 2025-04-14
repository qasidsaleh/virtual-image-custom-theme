<?php

    $col1 = '';
    $col2 = '';
    $col3 = '';
    $col4 = '';
    $col5 = '';
    $col6 = '';
    require __DIR__ . '/../../../includes/components/generic_classes.php';
    // $generic_classes get from above file
    $generic_classes = implode(' ', $generic_classes);
    $layout = get_sub_field('grid_layout');
?>

<section class="grid-block <?php echo $generic_classes; ?>">
    <div class="container-fluid">
        <div class="grid col-<?php echo $layout['value']  ?>">
            <?php 
                // 1 Column Content
                if(in_array('1', $layout)){
                    $col1 = get_sub_field('column_1_content');
                    echo '<div>'.$col1.'</div>';
                // 2 Columns Content
                } else if(in_array('2', $layout)){
                    $col1 = get_sub_field('column_1_content');
                    $col2 = get_sub_field('column_2_content');
                    echo '<div>'.$col1.'</div>';
                    echo '<div>'.$col2.'</div>';
                // 3 Columns Content
                } else if(in_array('3', $layout)){
                    $col1 = get_sub_field('column_1_content');
                    $col2 = get_sub_field('column_2_content');
                    $col3 = get_sub_field('column_3_content');
                    echo '<div>'.$col1.'</div>';
                    echo '<div>'.$col2.'</div>';
                    echo '<div>'.$col3.'</div>';
                // 4 Columns Content
                } else if(in_array('4', $layout)){
                    $col1 = get_sub_field('column_1_content');
                    $col2 = get_sub_field('column_2_content');
                    $col3 = get_sub_field('column_3_content');
                    $col4 = get_sub_field('column_4_content');
                    echo '<div>'.$col1.'</div>';
                    echo '<div>'.$col2.'</div>';
                    echo '<div>'.$col3.'</div>';
                    echo '<div>'.$col4.'</div>';
                // 5 Columns Content
                } else if(in_array('5', $layout)){
                    $col1 = get_sub_field('column_1_content');
                    $col2 = get_sub_field('column_2_content');
                    $col3 = get_sub_field('column_3_content');
                    $col4 = get_sub_field('column_4_content');
                    $col5 = get_sub_field('column_5_content');
                    echo '<div>'.$col1.'</div>';
                    echo '<div>'.$col2.'</div>';
                    echo '<div>'.$col3.'</div>';
                    echo '<div>'.$col4.'</div>';
                    echo '<div>'.$col5.'</div>';
                // 6 Columns Content
                } else if(in_array('6', $layout)){
                    $col1 = get_sub_field('column_1_content');
                    $col2 = get_sub_field('column_2_content');
                    $col3 = get_sub_field('column_3_content');
                    $col4 = get_sub_field('column_4_content');
                    $col5 = get_sub_field('column_5_content');
                    $col6 = get_sub_field('column_6_content');
                    echo '<div>'.$col1.'</div>';
                    echo '<div>'.$col2.'</div>';
                    echo '<div>'.$col3.'</div>';
                    echo '<div>'.$col4.'</div>';
                    echo '<div>'.$col5.'</div>';
                    echo '<div>'.$col6.'</div>';
                }
            ?>
        </div>
    </div>
</section>