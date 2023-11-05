<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ping_pong
 */

 get_header();
 ?>
 
	 <main id="primary" class="site-main">
 
		 <?php if ( have_posts() ) : ?>
 
			 <header class="page-header-bois">
				 <h1>Nos bois</h1>
				 
			 </header><!-- .page-header -->
			 <section class="bois-wrapper">
 
			 <?php
			 /* Start the Loop */
			 while ( have_posts() ) :
				 the_post(); 
			 ?>
			 <div class="grid-bois">
			 <article class="bois-card">
				 <?php the_post_thumbnail(); ?>
				 <div class="bois-card_content">
					 <h2><?php the_title(); ?></h2> 
					 <?php the_excerpt(); ?>
					 <a href="<?php the_permalink(); ?>"> En savoir plus</a>
				 </div>
			 </article>
			 </div>
 
				 
		 <?php	endwhile; ?>
		 </section>
		 <?php
 
			 the_posts_navigation();
 
		 else :
 
			 get_template_part( 'template-parts/content', 'none' );
 
		 endif;
		 ?>
 
	 </main><!-- #main -->
 
 <?php
 get_footer();