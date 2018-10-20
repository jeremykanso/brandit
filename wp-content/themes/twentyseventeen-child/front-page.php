<?php
/**
* The front page template file
*
* If the user has selected a static page for their homepage, this is what will
* appear.
* Learn more: https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="portfolio-section">
			<h2>nos réalisations</h2>
			<div class="title-border"></div>
			<div id="portfolio">
				<div class="portfolio-row">
					<div class="portfolio-elems portfolio-elems-1"><img src="wp-content/themes/twentyseventeen-child/assets/images/test2.jpg" /></div>
					<div class="portfolio-elems portfolio-elems-1"><img src="wp-content/themes/twentyseventeen-child/assets/images/test.jpg" /></div>
					<div class="portfolio-elems portfolio-elems-1"><img src="wp-content/themes/twentyseventeen-child/assets/images/test.jpg" /></div>
				</div>
				<div class="portfolio-row">
					<div class="portfolio-elems portfolio-elems-2"><img src="wp-content/themes/twentyseventeen-child/assets/images/test.jpg" /></div>
					<div class="portfolio-elems portfolio-elems-2"><img src="wp-content/themes/twentyseventeen-child/assets/images/test2.jpg" /></div>
					<div class="portfolio-elems portfolio-elems-2"><img src="wp-content/themes/twentyseventeen-child/assets/images/test.jpg" /></div>
				</div>
				<div class="portfolio-row">
					<div class="portfolio-elems portfolio-elems-3"><img src="wp-content/themes/twentyseventeen-child/assets/images/test2.jpg" /></div>
					<div class="portfolio-elems portfolio-elems-3"><img src="wp-content/themes/twentyseventeen-child/assets/images/test.jpg" /></div>
					<div class="portfolio-elems portfolio-elems-3"><img src="wp-content/themes/twentyseventeen-child/assets/images/test2.jpg" /></div>
				</div>
			</div>
		</div>
		<div id="agency-section">
			<h2>l'agence</h2>
			<div class="title-border"></div>
			<div id="agency-img"><img /></div>
			<div id="agency">
			</div>
			<div id="clients-container">
				<div id="clients-sub">
					<h3>Quelques <br/><span>clients</span></h3>
					<div id="clients-list"></div>
				</div>
			</div>
		</div>



		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/page/content', 'front-page' );
		endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			* Filter number of front page sections in Twenty Seventeen.
			*
			* @since Twenty Seventeen 1.0
			*
			* @param int $num_sections Number of front page sections.
			*/
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

		endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
