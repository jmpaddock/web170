<div class="sidebar">
            <div class="squish-container">
                         
            <nav class="main-menu">
                <!-- Begin Pull Quote -->
                <?php if (get_post_meta($post->ID, 'Quote', true)) : ?>
                <blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>
                <?php endif; ?>
                <!-- end quote -->
                
            <!-- Begin Dynamic Sidebar -->
                <?php dynamic_sidebar(1); ?>
            <!-- End Dynamic Sidebar -->
            
            </nav><!-- main-menu -->
            </div>
        </div><!-- .sidebar -->
    </div><!-- .content -->