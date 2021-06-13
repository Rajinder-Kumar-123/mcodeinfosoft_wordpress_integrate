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
define( 'DB_NAME', 'mcode_wordpress_integrate' );

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
define( 'AUTH_KEY',         ':-Hk_sAg0oRIW_?L`D!d#pf4Vs.^)VvJt/1C @))unt#Za3t{f;+GNA;-u^deOFG' );
define( 'SECURE_AUTH_KEY',  'pU?c9+Cv+5rkti_~qj898AyPN5![E<$:[:^EOzB6%%98QYCR$Qt*R_My)Clm]vR5' );
define( 'LOGGED_IN_KEY',    '@9`M%hb~,[eTMe^ol(E2#}Y5Gd->j{4cH4T2N+{U gY|`Os!9c/%1]I96ff|= h7' );
define( 'NONCE_KEY',        '.$?#(qi6Z?=tB`[w;kc5I.$k+^,`ziCe~<<xKlM3os&]or@DLJk [d U/d]Yi|PF' );
define( 'AUTH_SALT',        '>kL^#YYz3fGNj] _nli9Zp>xk(/),^6V)L6SBAJn{l(~K=- eWL>KTo>xF,NFP?P' );
define( 'SECURE_AUTH_SALT', 'BfRR(? I:|5}-N-.2vg&3k&;/WYhD3ojp1KOV*q51<Ac`WY@<kyVOv<!1(tf3jjB' );
define( 'LOGGED_IN_SALT',   '8wK)+Hfn]RD?nfcK1xrLF7mP382m(;tVtVQQ~V$0ni!5kNCFvuC.X0HW^XUL-pa`' );
define( 'NONCE_SALT',       'Y.z/28&FWSS7=0,_RGc;8X2K0lx`6<L)qyo7#.$%n%RF.zaFIxW05`OgZ&0GXIB8' );

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
