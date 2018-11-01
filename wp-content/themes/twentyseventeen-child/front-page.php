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
			<h2 class="front-page-title">nos réalisations</h2>
			<div class="title-border"></div>
			<div id="portfolio">
				<?php
				$args = array(
					'cat' => 5,
					'posts_per_page' => 9
				);
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) {
					$i = 0;
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						$actual_mini_img = get_field('mini_case_study');
						$actual_perma = get_permalink();
						$actual_title = get_the_title();
						$actual_type = get_field("type_case_study");
						echo	"<div class='portfolio-elems'><a href='$actual_perma'><h2>$actual_type</h2><h3>$actual_title</h3><img src='$actual_mini_img'/></a></div>";
					}
				}
				?>
			</div>
		</div>
		<div id="agency-section">
			<h2 class="front-page-title">l'agence</h2>
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
					<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Brand_activation.svg" height="30" width="30" /><span>Brand Activation</span></div>
					<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/pub.svg" height="30" width="30" /><span>Advertising</span></div>
					<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Creation_production.svg" height="30" width="30" /><span>Création & Production</span></div>
					<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Digital.svg" height="30" width="30" /><span>Digital</span></div>
					<div class="bloc-competences"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Business_Development.svg" height="30" width="30" /><span>Business Development</span></div>
				</div>
				<a href="/agence/" ><div id="agency-button">
					En savoir +
				</div>
			</a>
		</div>
		<div id="clients-container">
			<div id="clients-title-line"></div>
			<h3>Quelques <br/><span>clients</span></h3>
			<div id="clients-sub">
				<div id="clients-list">
					<?php echo do_shortcode("[slide-anything id='6']"); ?>
				</div>
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
