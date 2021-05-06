<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'travelblogword' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't*,RWO<BSb%zY |>X%}R203xH#IGFM!-4_]9//0|$h|m;cfm]t{MRFrz{k?!#4`B' );
define( 'SECURE_AUTH_KEY',  'p]?dc&W|u1;YB>f,6!$,G2g)#rd)9~^6=~cJg<BZpx7k%U`Y-ryaiKfEdwI$Z&<s' );
define( 'LOGGED_IN_KEY',    'L%3p9Ph0GWG8mh,E=8XFPmPfY5J@,dJ/MHw3s.%?|6MRAYXBECYA>>xPSIx!rZ}U' );
define( 'NONCE_KEY',        'v[-D-{Zm3r{YS+.<6h9_=5jGYNJ k3jcFS3a{[QrMesqD T1bv.X*`3R6k,aO8QM' );
define( 'AUTH_SALT',        'MPbu&ci6;ep!~T@#qYF*+^_H-sAq6&W/@P}Gx1`2RyX=u9by9PNTBZA06rJy;Y.H' );
define( 'SECURE_AUTH_SALT', 'P74gH@hB~b_XN}e_~--l^wb]E<y,CR(%{[/uVi|n3QamD9/y`(<a6;r;bPh17{q1' );
define( 'LOGGED_IN_SALT',   'XR@(-!RwxZAI1o-wzC*NvE6dhi#cmV,Rm761vD:+^iL=Ix5PoH:eg5_,Gv.ne7=C' );
define( 'NONCE_SALT',       'n0 QL14>4Z1ozdL,09&|G/3~kg}^SBS/QeYVU%qHEqi{n3i3:ioDJa2(@5}STP|=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
