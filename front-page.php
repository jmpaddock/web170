<?php get_header(); ?>
 
 <main class="main-area">

    <picture class="header-image"><img src="<?php bloginfo('template_directory'); ?> images/header1.jpeg" alt="">
                        </picture>
            
   <div class="content">          
        <div class="centered">

            <section class="cards">
                
                <article class="card">
                    <a href="main.html">
                        <picture class="thumbnail">
                            <img src="<?php bloginfo('template_directory'); ?> images/ciderbottledark.jpeg" alt="">
                        </picture>
                        <div class="card-content">
                            <h2>About Me</h2>
                                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                                <article id-"article-<?php the_ID(); ?>" class="article">   
                                <?php the_content(''); ?>  
                                </article>
                                <?php endwhile; endif; ?>
                        </div><!-- .card-content -->
                    </a>
                </article><!-- .card -->

                <article class="card">
                    <a href="main.html">
                        <picture class="thumbnail">
                            
                        </picture>
                        <div class="card-content">
                            <h2>Latest News</h2>
                                <ul>
                                    <?php rewind_posts(); ?>
                                    <?php query_posts(array('posts_per_page' => '4')); ?>
                                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                                    <li><?php the_title(); ?></li> 
                                    <?php endwhile; endif; ?>
                                </ul>
                        </div><!-- .card-content -->
                    </a>
                </article><!-- .card -->

                <article class="card">
                    <a href="main.html">
                        <picture class="thumbnail">
            <img src="<?php bloginfo('template_directory'); ?> images/cartshirt.jpg"alt="">
                        </picture>
            <div class="card-content">
            <h2>Latest Articles</h2>
                <ul>
                    <?php rewind_posts(); ?>
                    <?php query_posts(array('posts_per_page' => '4', 'category_name' => 'articles')); ?>
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <li><?php the_title(); ?></li> 
                    <?php endwhile; endif; ?>
                </ul>
            </div><!-- .card-content -->
                    </a>
                </article><!-- .card -->
        </section><!-- .cards -->
           
        </div><!-- .centered -->
            
        </main>
    
<!-- sidebar -->


<?php get_footer(); ?>