<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
$cat = get_the_category();
$cat = $cat[0]; ?>

			<?php if ( is_front_page() ) : ?>
				<div class="site-branding">
					<div class="wrap">
						<?php the_custom_logo(); ?>
						<div class="site-branding-text site-branding-text-front">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">We Ar</a></h1>
			<?php else : ?>
				<div class="site-branding site-branding-mini">
					<div class="wrap">
						<?php the_custom_logo(); ?>
						<div class="site-branding-text">

			<?php endif; ?>

			<?php
			$description = get_bloginfo( 'description', 'display' );

			if (is_front_page() && ($description || is_customize_preview()) ) :
			?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
