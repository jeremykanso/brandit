<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="footer" role="contentinfo">
		<!--	<div class="wrap">-->
<div id="newsletterfooter">
	<h3>notre newsletter</h3>
	<form action="">
	  <input id="inputemail" type="text" name="email" placeholder="Adresse mail"><br>
		<label class="inputchecknews">
	  <input type="checkbox" name="checknews"><span class="checkmark"></span></label><span class="textchecknews">Je souhaite m'inscrire à la newsletter de Brand It Solutions</span><br/>
	  <input id="subscribe" type="submit" value="Inscrivez-vous">
	</form>
</div>
<div id="middlefooter">
	<?php the_custom_logo(); ?>
	<div id="adresse">
		2 rue d'Oran - 69001 Lyon - France
	</div>
	<div id="copyright">
© BRAND IT SOLUTIONS 2018 | <a href="">Mentions légales</a> | <a href="">Cookies</a>
	</div>
</div>
<div id="contactfooter">
	<a href="/contact.php"><div id="contactbutton">Contactez-nous</div></a>
	<ul id="sociallinks">
		<a href="facebook.com"><li id="facebookbutton"><img src="/wp-content/themes/twentyseventeen-child/assets/images/FB.svg" /></li></a>
		<a href="linkedin.com"><li id="linkedinbutton"><img src="/wp-content/themes/twentyseventeen-child/assets/images/In.svg" /></li></a>
		<a href="instagram.com"><li id="instagrambutton"><img src="/wp-content/themes/twentyseventeen-child/assets/images/Insta.svg" /></li></a>
	</ul>
</div>

			<!--</div> .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
