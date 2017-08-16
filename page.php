<?php get_header(); ?>
    
<!-- begin content -->
    <div id="content">
        
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(''); ?>  
        
        <?php endwhile; endif; ?>
        
<small>page.php</small>  
    </div>
            
        
<!-- end content -->

<!-- Begin main menu -->
<?php wp_nav_menu(array('theme_location' => 'main_menu', 'container' => 'div', 'container_id' => 'navigation',)); ?>
<!-- end main menu -->

<!-- sidebar -->
<?php get_sidebar(); ?>
<!-- end sidebar -->

<?php get_footer(); ?>