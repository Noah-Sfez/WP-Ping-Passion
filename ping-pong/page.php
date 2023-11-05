<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ping_pong
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="page-content">

				<?php
				the_content();
				?>
			</div>
			<div class="lien-accueil">
				<a href="http://ping.test/revetements/">Découvrez nos revêtements !</a>
				<a href="http://ping.test/bois/">Découvrez nos bois !</a>
			</div>
			<?php
		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php
get_footer();
