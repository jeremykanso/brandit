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
		<?php if( get_the_ID() == "12" ): ?>
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
					<div id="vous-bg-img"></div>
					<div id="vous-content">
					<h2>Vous</h2>
					<div id="vous-title"><?php the_field("titre_vous"); ?></div>
					<div id="vous-subtitle"><?php the_field("sous_titre_vous"); ?></div>
					<div id="vous-text"><?php the_field("texte_vous"); ?></div>
				</div>
				</div>
			</div>

			<div id="team-section">
				<h2>Team</h2>
				<div id="team-gallery">
					<div class="team-guy">
						<img src="<?php the_field("photo_team_one"); ?>" />
						<div class="name-guy">Touko Dakpou</div>
						<div class="title-guy">CEO</div>
					</div>
					<div class="team-guy">
						<img src="<?php the_field("photo_team_two"); ?>" />
						<div class="name-guy">Ahmed Traore</div>
						<div class="title-guy">Partnership Manager</div>

					</div>
					<div class="team-guy">
						<img src="<?php the_field("photo_team_three"); ?>" />
						<div class="name-guy">Samuel Eyraud</div>
						<div class="title-guy">Creative Project Manager</div>
					</div>
					<div class="team-guy talent-guy">
						<img src="/wp-content/themes/twentyseventeen-child/assets/images/team-vous.png" />
						<div class="name-guy talents">talents</div>
						<div class="title-guy joinus">JOIN US</div>
					</div>
				</div>
				<a href="/contact" style="box-shadow: none;
    display: inline-block;"><div id="talents-button">Brand It Talents</div></a>
			</div>

			<div id="offices-section">
				<div id="office-top">
				<h2>Bureaux</h2>
				<div class="title-border"></div>
			</div>
			<div id="map-supcontainer">
				<div class="map-container">
					<div id="map"></div>
					<div class="title-map">
					<h3>France</h3>
					<span>2 rue d’Oran</span>
						<span>69001 Lyon</span>
					<div class="design-block"></div>
				</div>
				</div>
				<div class="map-container">
					<div id="map2"></div>
					<div class="title-map">
					<h3>Cameroun</h3>
					<span>69, rue 1080 Yvi</span>
						<span>Bonanjo - Douala</span>
					<div class="design-block"></div>
				</div>
				</div>
				<div class="map-container">
					<div id="map3"></div>
					<div class="title-map">
					<h3>Belgique</h3>
					<span>Place de la Bourse 3551</span>
						<span>1000 Bruxelles</span>
					<div class="design-block"></div>
				</div>
			</div>
		</div>
		</div>


			<!-- CONTACT POST -->
		<?php elseif( get_the_ID() == "10" ): ?>
			<div id="contact-section">
				<div id="intro-contact">Vous avez un <p>projet</p> ?</div><h3>Bienvenue</h3>
				<p id="more-intro">Un café ? Un renseignement ? Racontez-nous !</p>
<div id="contact-subsection">
<?php the_content(); ?>
</div>
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
