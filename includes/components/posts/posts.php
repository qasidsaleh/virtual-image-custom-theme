<?php

    require __DIR__ . '/../../../includes/components/generic_classes.php';

    // $generic_classes get from above file
    if(!empty($generic_classes)){
        $generic_classes = implode(' ', $generic_classes);
    }
    $heading = get_sub_field('posts_heading');
    $showing_all_posts = get_sub_field('showing_all_posts');
    $custom_selection = get_sub_field('custom_selection');
    $select_posts = '';
    $num = '3';
    if($showing_all_posts){
        $num = '-1';
    } else {
        if($custom_selection){
            $select_posts = get_sub_field('select_posts');
            $num = '3';
        }
    }
?>

<section class="posts-section <?php echo $generic_classes; ?>">
    <div class="container-fluid reveal-bottom">
        <?php if($heading){
            echo '<h2 class="mb-50">'.$heading.'</h2>';
        } 
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $num,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        );
        if (!empty($select_posts)) {
            $args['post__in'] = $select_posts;
        }
        $posts = new WP_Query($args);
        if( $posts->have_posts() ): ?>
            <div class="posts-block">
                <?php while( $posts->have_posts() ) : $posts->the_post();
                    $image = get_the_post_thumbnail(get_the_ID(), 'full');
                    $heading = get_the_title();
                    $content = wp_trim_words(get_the_content(), 9); ?>
                    <div class="block">
                        <?php echo $image; ?>
                        <div class="caption"> 
                            <span><?php echo get_the_date(); ?></span>
                            <?php  if($heading){
                                echo '<strong>'.$heading.'</strong>';
                            } 
                            if($content){ 
                                echo '<p>'.$content.'</p>';
                            } ?>
                            <a href="<?php the_permalink(); ?>" class="link" title="Explore More <?php echo $heading; ?>">
                                <span>Read More</span>
                                <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.7071 8.70711C23.0976 8.31658 23.0976 7.68342 22.7071 7.29289L16.3431 0.928932C15.9526 0.538408 15.3195 0.538408 14.9289 0.928932C14.5384 1.31946 14.5384 1.95262 14.9289 2.34315L20.5858 8L14.9289 13.6569C14.5384 14.0474 14.5384 14.6805 14.9289 15.0711C15.3195 15.4616 15.9526 15.4616 16.3431 15.0711L22.7071 8.70711ZM0 8V9H22V8V7H0V8Z" fill="#FFA901"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; wp_reset_postdata();  ?>
    </div>
</section>