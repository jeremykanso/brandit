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
			<a href="/contact"><div id="contactbutton">Contactez-nous</div></a>
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
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyU-gxsujCz9XY7NPtFwKv5JiQwj06C8I&callback=initMap">
</script>
<script>
function initMap() {

const styleMaps = [
	{
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#f5f5f5"
			}
		]
	},
	{
		"elementType": "labels.icon",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#616161"
			}
		]
	},
	{
		"elementType": "labels.text.stroke",
		"stylers": [
			{
				"color": "#f5f5f5"
			}
		]
	},
	{
		"featureType": "administrative.land_parcel",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#bdbdbd"
			}
		]
	},
	{
		"featureType": "poi",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#eeeeee"
			}
		]
	},
	{
		"featureType": "poi",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#757575"
			}
		]
	},
	{
		"featureType": "poi.park",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#e5e5e5"
			}
		]
	},
	{
		"featureType": "poi.park",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#9e9e9e"
			}
		]
	},
	{
		"featureType": "road",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#ffffff"
			}
		]
	},
	{
		"featureType": "road.arterial",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#757575"
			}
		]
	},
	{
		"featureType": "road.highway",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#dadada"
			}
		]
	},
	{
		"featureType": "road.highway",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#616161"
			}
		]
	},
	{
		"featureType": "road.local",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#9e9e9e"
			}
		]
	},
	{
		"featureType": "transit.line",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#e5e5e5"
			}
		]
	},
	{
		"featureType": "transit.station",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#eeeeee"
			}
		]
	},
	{
		"featureType": "water",
		"elementType": "geometry",
		"stylers": [
			{
				"color": "#c9c9c9"
			}
		]
	},
	{
		"featureType": "water",
		"elementType": "labels.text.fill",
		"stylers": [
			{
				"color": "#9e9e9e"
			}
		]
	}
];


	const positionOne = {lat: 40.674, lng: -73.945};
	const positionTwo = {lat: 40.700, lng: -73.000};
	const positionThree = {lat: 40.900, lng: -73.945};


	var map = new google.maps.Map(document.getElementById('map'), {
		center: positionOne,
		disableDefaultUI: true,
		zoom: 12,
		styles: styleMaps});

		var marker = new google.maps.Marker({
    position: positionOne,
    map: map,
    title: 'Hello World!'
  });

	var map2 = new google.maps.Map(document.getElementById('map2'), {
		center: positionTwo,
		disableDefaultUI: true,
		zoom: 12,
		styles: styleMaps});

		var marker = new google.maps.Marker({
		position: positionTwo,
		map: map2,
		title: 'Hello World!'
	});

	var map3 = new google.maps.Map(document.getElementById('map3'), {
		center: positionThree,
		disableDefaultUI: true,
		zoom: 12,
		styles: styleMaps});

		var marker = new google.maps.Marker({
		position: positionThree,
		map: map3,
		title: 'Hello World!'
	});

}


</script>

</body>
</html>
