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
define('DB_NAME', 'wordpress_test');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'test');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'test');

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
define('AUTH_KEY',         '&{Y$@gm6[U3*Fj),3ig*e(#%[_:Ap0!Z7jFfm;fHBtH|wRn-(zh4GBb@%wy}P]M;');
define('SECURE_AUTH_KEY',  '+q/w}]g]Hat~;6z%_>XwAM.}6St#f& !8b|R{CZT?gFJHH44J4Y45Pg%?k,sL$v<');
define('LOGGED_IN_KEY',    'Phs,0&qyMLaT2LC(+G*o,&Df7.@6G2TqV XaXY@}`}aI9F-YO<+U@y|O7]EFz`<O');
define('NONCE_KEY',        '{3Nj)F8T$DE6[|iL~#Guyp0h4+0pp^=i.rK/C{dxOC;|DqwN==Hoo6>Va}c+|5#`');
define('AUTH_SALT',        '/xUX)Mj6?_;Wf@17oM8sVtxD&I;y-8(/^V0f>o1}a1*op &42gZqa}5znwXg[7C.');
define('SECURE_AUTH_SALT', '4^eRFRg5KjddwzFMxH*|/!2ap~8g>ASmZx5s.>E^g)q-nhAbZG]$g1k^`p0r^,B%');
define('LOGGED_IN_SALT',   ']Qr)3&9pJIYF%s9xBc!_or}N2%_wL4Aa|lE2Y ||N%gpKo>fburs0.2{qcHRan0C');
define('NONCE_SALT',       '<td mDi>db{wB@_{9C+61lX4.^ygM$Q)Aktaa~-z5(=Fho;I@Q0cb0Bmb?P_?r7g');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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