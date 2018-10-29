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
	<div class="background-category-item category-item-<?php the_ID(); ?>"></div>
	<div class="yellow-box">
		<?php	if ($cat->cat_name == "expertises"): ?>


			<?php
			/*	if ( is_sticky() && is_home() ) :
			echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;*/
		?>
		<header class="entry-header">
			<div class="title-icon title-icon-<?php the_ID(); ?>">
				<?php
				$i = get_the_ID();

				switch ($i) {
					case 86:
					echo '<img src="/wp-content/themes/twentyseventeen-child/assets/images/Brand_Activation.svg" />';
					break;
					case 88:
					echo '<img src="/wp-content/themes/twentyseventeen-child/assets/images/pub.svg" />';
					break;
					case 90:
					echo '<img src="/wp-content/themes/twentyseventeen-child/assets/images/Creation_production.svg" />';
					break;
					case 92:
					echo '<img src="/wp-content/themes/twentyseventeen-child/assets/images/Digital.svg" />';
					break;
					case 94:
					echo '<img src="/wp-content/themes/twentyseventeen-child/assets/images/Business_Development.svg" />';
					break;
					default;
					echo "icon";
					break;
				}
				?>

			</div>
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

<?php elseif($cat->cat_name == "solutions exclusives"): echo "test2"; ?>

<?php endif; ?>

</article><!-- #post-## -->
