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