<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'france-and-only');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

// empeche MAJ automatique wp
define( 'WP_AUTO_UPDATE_CORE', false );

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-P[:Pl$b^g7hBx.H6[-*hnLn-yp9|/Lp%/ciNQ97&C]:.}nA$ihKezJIN /jM+G.');
define('SECURE_AUTH_KEY',  'tBvd03lj1aN}H[-C^*ewh&*-GBQz$eu}+o]ePHKt:?t8/BM8t ,j~(88njcY7>+;');
define('LOGGED_IN_KEY',    'QF-E:?mSs9>; +kWyt7v*o:t?sdV,uGanvE|sT|#|Ze8A,c=,Ft>>kzNLL3|&SQj');
define('NONCE_KEY',        'Et5!OI+nS[%q;@i1vg3|a]bO/?H/0A=9fZ$6vC_b8|sVB(1w-Z0>L4c3t0+4k(x:');
define('AUTH_SALT',        '*X.r;QW@%[3hsDbSJ+=xP{Ba-dbKd`bz8)RXjt-m(&r,P@<ZjhX:&P[,Ew->,n1*');
define('SECURE_AUTH_SALT', 'vvkX?Yi3eloRIV{|&z(QNXxqoQ>B|h5v]6WAZg6TMOt]5)E&r+Viax,dNoA;Aj~~');
define('LOGGED_IN_SALT',   'Xdq{a*|!76+6D uI9$+(FiR$3rD1f>^[g0|ns)27c#2RM~N^XsO_s_-bwSkl9Cyn');
define('NONCE_SALT',       ']pI6E&d+-Ej- .<Jm0nd3dTFdP/jKq-d$!3ro]+f+ICi]p(h`oK<5e)QYF]B.U2K');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');