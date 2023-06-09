<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'templatemo_486' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '6m[m=e;W+sG(E1raLCcP$Ocn*3wy-5bxOAj)Jto&j<BU0Qc<=ooyH%rJKM*riFSq' );
define( 'SECURE_AUTH_KEY',  'PXJEl8{$tdO2.SVm]E@zc4X3r3SCk|^FQ3MF9]n?,H28JXVLLC7g925$S2~QV7,F' );
define( 'LOGGED_IN_KEY',    '>CZ+{-H.<ciO4fJ$Rk~USAQ [krr@Z_Qf}s tf~O-7Y*/vq,rH%M5]>XRklf@}nY' );
define( 'NONCE_KEY',        'R$kgK4|dK-&]i+tZ3^!ve)WNf2;HtV5)[@8;c@,%%D2}t1W9=)/fAUTo]j&k`Lfq' );
define( 'AUTH_SALT',        '<Z ;vQ{tZ1;bFpLFW1|-ZH^BF?1A`YV[%f`lzf6L+[?vs%Uxf?Fa.z37azmJQY7;' );
define( 'SECURE_AUTH_SALT', 'E}>?C^g:^kXk+>E`cB]jvbb7;Q0)(R1AA)FRb[4[h2-yu[Y[1:-qG@#`CD~D5pru' );
define( 'LOGGED_IN_SALT',   '-JT.d}8-Uq*W}kiRhP5^j{0@1PR={ABV.n;Ax+ Q@pC!Ey#=em>C/NVT6P=Z77Zy' );
define( 'NONCE_SALT',       'GfYU(fl(fvTepnV@Qifhs}X->xi%`IxUntoP)-<5e1%V0KC;u5BX%KP>aF=VHV?c' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
