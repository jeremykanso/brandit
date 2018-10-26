<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<div class="custom-header">

<?php if ( is_front_page() ) : ?>
	<div class="custom-header-media">
		<?php the_custom_header_markup(); ?>
	</div>
	<div id="redcontainer">
		<div id="redsquareone"></div>
		<div id="redsquaretwo"></div>
	</div>
<?php else : ?>
	<div class="articles-header">

	</div>
	<?php endif; ?>





	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
