<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_quizz' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Sijs2wwyj6Lq4rG,#.~5MA)B)P8iOW;nTC0RZF>sy5Nc(hM$B!9Aa<NQQgi]]2U;' );
define( 'SECURE_AUTH_KEY',  'V>jvNXPl+y4_9i%IgQHOAQnY`}jk bjq;0my#+FH@$IM_r0x%~e=Ez?z,Xky}(fV' );
define( 'LOGGED_IN_KEY',    'p;zaE1~m=irYnspxj]92FiLJ+Z^NTV3wdr>U#j: J,]a(Vv3,hmvSQTusZQ~)o}z' );
define( 'NONCE_KEY',        '$q{5#ke{3dHsx^[;J{7NmF +a^<(?<7GnUI;F-]u>;M!Ib0]RgLgAzpd0!Mq]L?`' );
define( 'AUTH_SALT',        '/K4V.U$</tl`^Q.XEN!SMl5LMum!HFf2^LdPnE}a!-Om{{#s6FQaRf)q?#?29toF' );
define( 'SECURE_AUTH_SALT', '|rOsg;ONKD?slj.<Gm?0-l4yMvr0S|x4T%xguy?*% =q+4qAl5]i>m$S0sJW{P1D' );
define( 'LOGGED_IN_SALT',   '@Re!E18>dS=/Q>-*/8T6zuo/c%w$^nFO&N.XPF0to1U%:--YMB<H(q~.r``=x]!{' );
define( 'NONCE_SALT',       '|+T@Z%|Rs*`Hh:h6b;?c0i_qE4f5J*iW9+<M%$l`eUdU`4/[3i#`+]M}tcEjx0@8' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
