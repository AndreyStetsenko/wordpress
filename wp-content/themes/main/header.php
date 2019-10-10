<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="ru"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="ru"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" <?php language_attributes(); ?>
<!--<![endif]-->
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Gena VITER">
   <meta name="author" content="Andrew Stetsenko">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
 </head>
 <body id="top" <?php body_class(); ?>>
   <header class="s-header">

       <nav class="header-nav">

           <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

           <div class="header-nav__content">
               <h3>Navigation</h3>

               <?php wp_nav_menu( array(
                 'menu_class'      => 'header-nav__list',
                 'depth'           => 0,
                 'theme_location'  => 'top-menu'
               )); ?>

               <?php
                 $rows = get_field('top-social', 'option');
                 if($rows)
                 {
                   echo '<ul class="header-nav__social">';
                   foreach($rows as $row)
                   {
                     echo '<li>';
                     echo '<a href="' . $row['link'] . '">';
                     echo '<i class="fa fa-' . $row['icon'] . '" aria-hidden="true">';
                     echo '</i>';
                     echo '</a>';
                     echo '</li>';
                   }
                   echo '</ul>';
                 }
                 ?>


           </div> <!-- end header-nav__content -->

       </nav>  <!-- end header-nav -->

       <a class="header-menu-toggle" href="#0">
           <span class="header-menu-text">Menu</span>
           <span class="header-menu-icon"></span>
       </a>

   </header>
