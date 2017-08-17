
<!-- Begin main menu -->
<?php wp_nav_menu(array('theme_location' => 'main_menu', 'container' => 'div', 'container_id' => 'navigation',)); ?>
<!-- end main menu -->


<div class="sidebar">
            <div class="squish-container">
                         <a href="home.html">  <logo class="logo">
                            <img  src="<img src="<?php bloginfo('template_directory'); ?> images/slantedcider.png" alt="vector graphic Slanted cider logo">
                        </logo> </a>
            <nav class="main-menu">
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="main.html">Ciders</a></li>
                    <li><a href="">Seasonal</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </nav><!-- main-menu -->
            </div>
                <!-- Begin Pull Quote -->
                <?php if (get_post_meta($post->ID, 'Quote', true)) : ?>
                <blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>
                <?php endif; ?>
                <!-- end quote -->
                
            <!-- Begin Dynamic Sidebar -->
                <?php dynamic_sidebar(1); ?>
            <!-- End Dynamic Sidebar -->
            
        </div><!-- .sidebar -->
    </div><!-- .content -->