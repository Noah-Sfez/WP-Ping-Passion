<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping_pong
 */

$dataDessert = get_fields();
//var_dump($dataDessert);
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="content-bois">
				<h1 class="entry-title-bois"><?php the_title(); ?></h1>
				<div class="textAndImg-bois">
					<?php the_post_thumbnail();?> 
					<div class="txt-bois"><?php the_content(); ?></div>
				</div>
			</div>


			<?php

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
