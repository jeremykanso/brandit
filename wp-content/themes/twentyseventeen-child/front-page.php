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
					<div class="portfolio-elems"><img src="wp-content/themes/twentyseventeen-child/assets/images/test2.jpg" /></div>
					<div class="portfolio-elems"><img src="wp-content/themes/twentyseventeen-child/assets/images/test.jpg" /></div>
					<div class="portfolio-elems"><img src="wp-content/themes/twentyseventeen-child/assets/images/test.jpg" /></div>
					<div class="portfolio-elems"><img src="wp-content/themes/twentyseventeen-child/assets/images/test.jpg" /></div>
					<div class="portfolio-elems"><img src="wp-content/themes/twentyseventeen-child/assets/images/test2.jpg" /></div>
					<div class="portfolio-elems"><img src="wp-content/themes/twentyseventeen-child/assets/images/test.jpg" /></div>
					<div class="portfolio-elems"><img src="wp-content/themes/twentyseventeen-child/assets/images/test2.jpg" /></div>
					<div class="portfolio-elems"><img src="wp-content/themes/twentyseventeen-child/assets/images/test.jpg" /></div>
					<div class="portfolio-elems"><img src="wp-content/themes/twentyseventeen-child/assets/images/test2.jpg" /></div>
			</div>
		</div>
		<div id="agency-section">
			<h2>l'agence</h2>
			<div class="title-border"></div>
			<div id="agency-img"></div>
			<div id="agency">
				<div id="agency-text">
				<h3>La performance créative</h3>
				<h3>au coeur de nos réflexions</h3>
				<p>Nous avons une approche stratégique s’articulant autour de deux axes indissociables :</p>
<p style="font-style:italic">la créativité et la performance.</p>
<div id="agency-text-sub">
<p style="display:inline-block;border-bottom:8px solid #000;line-height:6px">Créativité</p> dans la vision, le style et les moyens.<br/>
<p style="display:inline-block;border-bottom:8px solid #000;line-height:6px">Performance</p> par les retombées quantitatives et/ou qualitatives que nos actions permettent de générer.
</div>
</div>
<div id="agency-icons">
<div><img src="/wp-includes/images/Brand_activation.svg" height="25" width="25" />Brand Activation</div>
<div><img src="/wp-includes/images/pub.svg" height="25" width="25" />Advertising</div>
<div><img src="/wp-includes/images/Creation_production.svg" height="25" width="25" />Création & Production</div>
<div><img src="/wp-includes/images/Digital.svg" height="25" width="25" />Digital</div>
<div><img src="/wp-includes/images/Business_Development.svg" height="25" width="25" />Business Development</div>
</div>
			</div>
			<div id="clients-container">
				<div id="clients-title-line"></div>
				<h3>Quelques <br/><span>clients</span></h3>
				<div id="clients-sub">
					<div id="clients-list"></div>
				</div>
			</div>
		</div>



		<?php // Show the selected frontpage content.
/*		if ( have_posts() ) :
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
			/*
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

		endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here.*/ ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
