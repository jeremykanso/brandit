<?php
/**
* The template for displaying archive pages
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

get_header(); ?>

<?php
$cat = get_the_category();
$cat = $cat[0]; ?>

<div>
	<?php if ( have_posts() ) : ?>
		<?php if ($cat->cat_name != "case studies"): ?>
			<header class="page-header"><?php
			echo single_term_title('<h1 class="category-title">','</h1>');	?></header><!-- .page-header -->
		<?php endif; ?>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php	if ($cat->cat_name == "expertises"): ?>
				<div id="top-expertises">
					<div id="expertises-icons">
						<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Brand_activation.svg" height="30" width="30" /><span>Brand Activation</span><a href="#anchor1"><div class="arrow-link"><img class="arrow-down-img" src="/wp-content/themes/twentyseventeen-child/assets/images/Arrow_down.svg" /></div></a></div>
						<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/pub.svg" height="30" width="30" /><span>Advertising</span><a href="#anchor2"><div class="arrow-link"><img class="arrow-down-img" src="/wp-content/themes/twentyseventeen-child/assets/images/Arrow_down.svg" /></div></a></div>
						<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Creation_production.svg" height="30" width="30" /><span>Création & Production</span><a href="#anchor3"><div class="arrow-link"><img class="arrow-down-img" src="/wp-content/themes/twentyseventeen-child/assets/images/Arrow_down.svg" /></div></a></div>
						<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Digital.svg" height="30" width="30" /><span>Digital</span><a href="#anchor4"><div class="arrow-link"><img class="arrow-down-img" src="/wp-content/themes/twentyseventeen-child/assets/images/Arrow_down.svg" /></div></a></div>
						<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Business_Development.svg" height="30" width="30" /><span>Business Development</span><a href="#anchor5"><div class="arrow-link"><img class="arrow-down-img" src="/wp-content/themes/twentyseventeen-child/assets/images/Arrow_down.svg" /></div></a></div>
					</div>
				</div>
			<?php elseif($cat->cat_name == "solutions exclusives"): ?>
				<div id="top-solutions-exclusives">
					<div id="solutions-icons">
						<div class="bloc-solutions bloc-solutions-bis"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Jeu.svg" height="120" width="120" /><br/><div class="bloc-solutions-text"><span>Born</span>e de jeu<br/>inter<span>active</span></div><a href="#anchor1"><div class="arrow-link"><img class="arrow-down-img" src="/wp-content/themes/twentyseventeen-child/assets/images/Arrow_down.svg" /></div></a></div>
						<div class="bloc-solutions bloc-solutions-bis"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Selfie.svg" height="120" width="120" /><br/><div class="bloc-solutions-text">Bor<span>ne</span><br/>selfi<span>e</span></div><a href="#anchor2"><div class="arrow-link"><img class="arrow-down-img" src="/wp-content/themes/twentyseventeen-child/assets/images/Arrow_down.svg" /></div></a></div>
					</div>
				</div>

			<?php elseif($cat->cat_name == "case studies"):
				// TO DO : défilement des articles
				?>

			<?php endif; ?>
			<?php
			if ( have_posts() ) : ?>
			<?php
			$i = 0;
			/* Start the Loop */
			while ( have_posts() ) :
				$i++;
				$anchor = "[sta_anchor id='anchor$i' class='anchors' /]";
				echo	do_shortcode($anchor);
				the_post();
			/*
			* Include the Post-Format-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Format name) and that will be used instead.
			*/
			get_template_part( 'template-parts/post/content', get_post_format() );

		endwhile;

	/*	the_posts_pagination( array(
			'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
		) ); */

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
