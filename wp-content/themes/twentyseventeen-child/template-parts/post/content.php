<?php
/**
* Template part for displaying posts
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.2
*/

?>

<?php
$cat = get_the_category();
$cat = $cat[0]; ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ($cat->cat_name != "case studies"): ?>

	<div class="background-category-item category-item-<?php the_ID(); ?>"></div>
	<div class="yellow-box">
		<header class="entry-header">
			<div class="title-icon title-icon-<?php the_ID(); ?>">
				<?php
				$i = get_the_ID();

				switch ($i) {
					case 14:
					echo '<img src="/wp-content/themes/twentyseventeen-child/assets/images/Brand_Activation.svg" />';
					break;
					case 16:
					echo '<img src="/wp-content/themes/twentyseventeen-child/assets/images/pub.svg" />';
					break;
					case 18:
					echo '<img src="/wp-content/themes/twentyseventeen-child/assets/images/Creation_production.svg" />';
					break;
					case 24:
					echo '<img src="/wp-content/themes/twentyseventeen-child/assets/images/Digital.svg" />';
					break;
					case 22:
					echo '<img src="/wp-content/themes/twentyseventeen-child/assets/images/Business_Development.svg" />';
					break;
					case 28:
					echo '<img src="/wp-content/themes/twentyseventeen-child/assets/images/Selfie_white.svg" />';
					break;
					case 26:
					echo '<img src="/wp-content/themes/twentyseventeen-child/assets/images/Jeu_white.svg" />';
					break;

					default;
					echo "icon";
					break;
				}
				?>

				<?php
				/*	if ( is_sticky() && is_home() ) :
				echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
			endif;*/
			?>

			<?php
			/*	if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
			if ( is_single() ) {
			twentyseventeen_posted_on();
		} else {
		echo twentyseventeen_time_link();
		twentyseventeen_edit_link();
	};
	echo '</div><!-- .entry-meta -->';
};*/

if ( is_single() ) {
	the_title( '<h1 class="entry-title">', '</h1>' );
} elseif ( is_front_page() && is_home() ) {
	the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
} else {

	the_title( '<h2 class="entry-title">', '</h2>' );
}
?>

</div>
<?php	if ($cat->cat_name == "expertises"): ?>

</header><!-- .entry-header -->
<div class="objectifs-section">
	<h3>Objectifs</h3>
	<?php the_field("objectifs_de_lexpertise"); ?>
</div>
</div>
<div class="bottom-box">
	<h3>Services</h3>
	<?php the_field("services_expertise"); ?>
</div>


<?php elseif($cat->cat_name == "solutions exclusives"): ?>

</header><!-- .entry-header -->
<div class="objectifs-section objectifs-solutions">
	<h3>Présentation</h3>
	<?php the_field("texte_solutions_exclusives"); ?>
</div>
</div>
<div class="bottom-box bottom-solutions">
	<div class="img-bottom-one">
		<img src="<?php the_field("img_bottom_one"); ?>" />
	</div>
	<div class="img-bottom-two">
		<img src="<?php the_field("img_bottom_two"); ?>" />
	</div>
	<div class="img-bottom-three">
		<img src="<?php the_field("img_bottom_three"); ?>" />
	</div>
	<div class="img-bottom-four">
		<img src="<?php the_field("img_bottom_four"); ?>" />
	</div>
</div>
<div class="subbottom-interested">
	<div class="title-interested"><span>Intéressé</span> par cette solution <span style="color:#000">?</span></div>
	<a href="/contact/"><div class="interested-button">Contactez-nous</div></a>
</div>

<?php endif; ?>

<?php elseif ($cat->cat_name == "case studies"): ?>

	<div id="top-cover-case-study">
		<div id="titles-block">
		<?php	the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h2><?php the_field("sous_titre_case_study"); ?></h2>
		</div>
	<div id="background-case-study" style="background-image:url('<?php the_field("background_image_case_study"); ?>')">
	</div>
	</div>


<?php the_field("titre_client"); ?>
<?php the_field("texte_client"); ?>
<?php the_field("couleur_background_client"); ?>
<?php the_field("background_image_client"); ?>
<?php the_field("territoire"); ?>
<?php the_field("brief"); ?>
<?php the_field("actions"); ?>
<?php the_field("couleur_background_territoire"); ?>
<?php the_field("carousel_case_study"); ?>





<?php the_field("mini_case_study"); // TO DO : intégrer en page d'accueil ?>


<?php endif; ?>

<div class="entry-content">
	<?php
	/* translators: %s: Name of current post */
	/*	the_content( sprintf(
	__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
	get_the_title()
	) );*/

	wp_link_pages( array(
		'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
		'after'       => '</div>',
		'link_before' => '<span class="page-number">',
		'link_after'  => '</span>',
	) );
	?>
</div><!-- .entry-content -->



<?php
if ( is_single() ) {
	twentyseventeen_entry_footer();
}
?>



</article><!-- #post-## -->
