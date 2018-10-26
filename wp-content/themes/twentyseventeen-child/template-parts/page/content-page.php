<?php
/**
* Template part for displaying page content in page.php
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php // twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">

		<!-- AGENCY POST -->
		<?php if( get_the_ID() == "111" ): ?>
			<div id="image-section">
				<img src="/wp-content/themes/twentyseventeen-child/assets/images/office-picture.jpg" />
			</div>
			<div id="notre-ambition-section">
				<h2>Notre ambition</h2>
				<div id="notre-ambition-text"><?php the_field("notre_ambition"); ?></div>
			</div>
			<div id="notre-approche-section">
				<div id="notre-approche-subsection">
					<h2>Notre approche</h2>
					<div id="notre-approche-title"><span><?php the_field("titre_notre_approche"); ?></span></div>
					<div id="notre-approche-text"><?php the_field("texte_notre_approche"); ?></div>
				</div>
			</div>
			<div id="icons-section">
				<div id="icons-subsection">
				<h2>EXPERTISES</h2>
				<div id="expertises-icons">
					<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Brand_activation.svg" height="30" width="30" /><span>Brand Activation</span><a href="/category/expertises/"><div class="cross-link">+</div></a></div>
					<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/pub.svg" height="30" width="30" /><span>Advertising</span><a href="/category/expertises/"><div class="cross-link">+</div></a></div>
					<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Creation_production.svg" height="30" width="30" /><span>Création & Production</span><a href="/category/expertises/"><div class="cross-link">+</div></a></div>
					<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Digital.svg" height="30" width="30" /><span>Digital</span><a href="/category/expertises/"><div class="cross-link">+</div></a></div>
					<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Business_Development.svg" height="30" width="30" /><span>Business Development</span><a href="/category/expertises/"><div class="cross-link">+</div></a></div>
				</div>
				<h2>SOLUTIONS EXCLUSIVES</h2>
				<div id="solutions-icons">
					<div class="bloc-solutions"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Jeu_black.svg" height="50" width="50" /><span>Bornes de jeu interactives</span><a href="/category/solutions-exclusives/"><div class="cross-link">+</div></a></div>
					<div class="bloc-solutions"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Selfie_black.svg" height="50" width="50" /><span>Bornes selfie</span><a href="/category/solutions-exclusives/"><div class="cross-link">+</div></a></div>
				</div>
			</div>
			</div>
			<div id="vous-section">
				<div id="vous-subsection">
					<h2>Vous</h2>
					<div id="vous-title"><?php the_field("titre_vous"); ?></div>
					<div id="vous-subtitle"><?php the_field("sous_titre_vous"); ?></div>
					<div id="vous-text"><?php the_field("texte_vous"); ?></div>
				</div>
			</div>

			<div id="team-section">
			</div>

			<div id="offices-section">
			</div>
		<?php endif; ?>


		<?php
		//	the_content();

		//		wp_link_pages( array(
		//			'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
		//			'after'  => '</div>',
		//		) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
