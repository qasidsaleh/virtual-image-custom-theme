    <?php
        $address = get_field('address','options');
        $address_link = get_field('address_link','options');
        $phone = get_field('phone','options');
        $email = get_field('email','options');
        $heading1 = get_field('heading1','options');
        $heading2 = get_field('heading2','options');
        $timing = get_field('timing','options');
    ?>
    <footer id="footer" class="footer">
        <div class="container-fluid">
            <div class="inner reveal-bottom">
                <div class="footer-grid">
                    <?php if($heading1){
                        echo '<span>'.$heading1.'</span>';
                    } 
                    if($heading2){ ?>
                        <a href="<?php echo $heading2['url']; ?>" title="<?php echo $heading2['title']; ?>" <?php if($heading2['target']){echo 'target="_blank"';} ?>><?php echo $heading2['title']; ?></a>
                    <?php } ?>
                </div>
                <div class="footer-info">
                    <div class="info-item">
                        <?php if($address){ ?>
                            <div class="item">
                                <a href="<?php echo $address_link; ?>" title="address" target="_blank"><?php bloginfo('name'); ?><?php echo ' '.$address; ?></a>
                            </div>
                        <?php } ?>
                        <div class="item">
                            <?php
                                echo str_replace( '<li class="', '<li class="',
                                    wp_nav_menu( array(
                                    'container'       => false,
                                    'theme_location' => 'footer-menu',
                                    'items_wrap'      => '<ul>%3$s</ul>',
                                    'menu_class' => ''
                                )));
                            ?>
                        </div>
                        <div class="item copyrights">
                            <span>Powered by</span>
                            <a href="https://virtualimage.ca/" title="virtual image" rel="noopener noreferrer nofollow" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vi-logo.webp" width="28" height="22" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="info-item">
                        <?php if($timing){ ?>
                            <div class="item">
                                <Span><?php echo $timing; ?></span>
                            </div>
                        <?php } ?>
                        <div class="item">
                            <?php if($phone){ ?>
                                <span>T:</span>
                                <a href="tel:<?php echo $phone; ?>" title="phone" target="_blank"><?php echo $phone; ?></a>
                                <br>
                            <?php }
                            if($email){ ?>
                                <span>E:</span>
                                <a href="mailto:<?php echo $email; ?>" title="email" target="_blank"><?php echo $email; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="info-item">
                        <?php if( have_rows('socials','options') ):
                            while( have_rows('socials','options') ) : the_row();
                                $icon = get_sub_field('icon','options');
                                $link = get_sub_field('link','options'); ?>
                                <a href="<?php echo $link; ?>" title="Social Link" target="_blank"><?php echo $icon; ?></a>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php 
        wp_footer();
        echo get_field('footer_script', 'option'); 
    ?>
</body>
</html>