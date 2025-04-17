<?php

    require __DIR__ . '/../../../includes/components/generic_classes.php';

    // $generic_classes get from above file
    if(!empty($generic_classes)){
        $generic_classes = implode(' ', $generic_classes);
    }

    // get grid layout
    $layout = get_sub_field('grid_layout');
    
    // Grid values array for 1/11, 2/10 column .....
    $values = ['1-11', '2-10', '3-9', '4-8', '5-7', '7-5', '8-4', '9-3', '10-2', '11-1'];

?>

<section class="grid-block <?php echo $generic_classes; ?>">
    <div class="container-fluid">
        <div class="grid col-<?php echo $layout['value'];  ?>">
            <?php 

                $columns = array();
                // For Simple Grid Columns e.g(2,3,4,5,6)
                if (array_diff($values, $layout) === $values) {
                    for ($i = 0; $i < $layout['value']; $i++) {
                        $value = $i + 1;
                        $group_value = 'column_'.$value;
                        $group = get_sub_field($group_value);
                        $group_content_value = 'column_'.$value.'_content';
                        echo '<div>'.$group[$group_content_value].'</div>';
                        
                    }
                } 
                // For Complex Grid Columns e.g(1/11,2/10,3/9,4/8,5/7,7/5,8/4,9/3,10/2,11/1)
                else { 
                    for ($i = 1; $i < 3; $i++) { // In this case just 2 columns grid will be created with different width as per layout
                        $group_value = 'column_'.$i;
                        $group = get_sub_field($group_value);
                        $group_content_value = 'column_'.$i.'_content';
                        echo '<div>'.$group[$group_content_value].'</div>';
                    }
                }
            ?>
        </div>
    </div>
</section>