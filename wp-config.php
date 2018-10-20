<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'brandit');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g [g_N|A/9-pw#Uf=<{#AzqRm8l>lU*~Hs!]_X4XJj C(1}_V0zI]ng+l${OM4b*');
define('SECURE_AUTH_KEY',  'NH)js0|9*PKOhgj4lE/_+8z(sV**w-;>GsPGwCM:8E`qhWS/0DN`@xLO(ahv[cMw');
define('LOGGED_IN_KEY',    'cVNbKZ0m5QX4e!.|y&@2.^XqP!mWg:`q0wKi)tdmVX&G9V7Sht-|yG-WB$.=w q@');
define('NONCE_KEY',        '1O(I[X?g5=(QI<7gRmbk==C5/n U/<_[l!]VX<A^+IIO&Wb1A8.mju0EnYSEmXpB');
define('AUTH_SALT',        'Dx|21Fh[=9zjIpf6EtSH<5o<vd}i^D`$+HVKugMYia6%9?]ME8T4zsI9puOqh,hH');
define('SECURE_AUTH_SALT', 'X9N5JpH/I0c*]oyUNAAnjx+eO|xB}fp>fsx0QD@p^i|i_0{4Rpq(Sb#;Y(C%QbVK');
define('LOGGED_IN_SALT',   'rh2_E=d3w5]Zd*xAz]7< 4*}r<HqJ-mfds|wobtM&$JCC4:?ij`yVwNJRC8B6!X]');
define('NONCE_SALT',       ':0og19}eE@}_hAAT/|$@_91oX7/<xA6R6o7>k!*>M8PE|WN/}(|[O,Ao:!KnPViY');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'bi_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');