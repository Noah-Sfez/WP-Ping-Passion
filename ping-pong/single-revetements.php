<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping_pong
 */

$dataSpecificite = get_fields();
//var_dump($dataSpecificite);
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			?>
		<div class="content-revetements">
		<h1 class="entry-title-revetements"><?php the_title(); ?></h1>
		<div class="textAndImg-revetements">
		<?php the_post_thumbnail(); ?>
		<div class="txt-revetements"><?php the_content(); ?></div>
		</div>
		</div>
			<?php

		endwhile; // End of the loop.
		?>

<section class="specificite">
	<h2>Spécificités du revêtement :</h2>
	<div>
		<p>Rapidité <?= $dataSpecificite['rapidite']; ?></p>
		<p>Contrôle <?= $dataSpecificite['controle']; ?></p>
		<p>Adhérence <?= $dataSpecificite['adherence']; ?></p>
		<p class="epaisseur">Épaisseur : 
			<?php foreach ($dataSpecificite['epaisseur'] as $epaisseur) : ?>
				<?= $epaisseur; ?> |
			<?php endforeach; ?>
		</p>
	</div>
</section>

	</main><!-- #main -->

<?php
get_footer();
