<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!--Remy Sharp Shim --> 
<!--[if lt IE 9]> 
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script> 
<![endif]-->
    
    <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
                
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"
          type="text/css" media="all">
          
  <!--begin wp header--->        
 <?php wp_head(); ?>  
 <!--end wp header--->
</head>
    
<body <?php body_class(); ?>>

    <div class="outer-wrap">

        <header class="combo-menu">  
            
           <nav class="sub-menu">
            <ul>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Account Login</a></li>
                    <li><a href="">Cart</a></li>
                
                </ul>
        </nav>
    <div class="search">
        <form>
          <input type="search" placeholder="Search...">
        </form>
            </div>  <!--end .search-->
        
        </header> 
    
    <!-- begin content -->
    <div class="content">
        
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(''); ?>  
        
        <?php endwhile; endif; ?>
                
    </div>
            
        
<!-- end content -->

        <div class="sidebar">
            <div class="squish-container">
                         <a href="home.html">  <logo class="logo">
                            <img  src="<?php bloginfo('template_directory'); ?> images/slantedcider.png" alt="vector graphic Slanted cider logo">
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
        </div><!-- .sidebar -->
    </div><!-- .content -->
        

    <footer class="footer-area">
         <ul>
             <li>
                <div class="footer-text">
                 Find Us On
                 </div>
                 <div class="icon">
                    <a href="">
                        <img src="<?php bloginfo('template_directory'); ?> images/facebook.png">
                     </a>
                      <a href="">
                        <img src="<?php bloginfo('template_directory'); ?> images/twitter.png">
                     </a>
                      <a href="">
                        <img src="<?php bloginfo('template_directory'); ?> images/ig.png">
                     </a>
                 </div> <!--end .icon-->
             </li>     
        </ul>
      <div class="footer-utility">
          <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Account Login</a></li>
                    <li><a href="">Cart</a></li>
                </ul>
        
        
        </div>
    </footer>

    </div><!-- .outer-wrap -->
    
<!--begin wp footer--->
<?php wp_footer(); ?>
<!--end wp footer--->
</body>

</html>