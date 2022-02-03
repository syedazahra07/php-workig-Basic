<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'learn_1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K_B36:48@K*@~x>{=$fhoiS/lZQjl%febqYc~)h2&s%4ej~8li<_$|VvN!tWk>wG' );
define( 'SECURE_AUTH_KEY',  'ziHtr=[#$a6m>xPi:S&AP#U3dYikNdt>gO`JUt[Fa,;kzV5MgnB)b+ oun<}M(Dw' );
define( 'LOGGED_IN_KEY',    '/RoUH@xKk-pa q|kfdz/jIY++uxOq65TsL_;OHfoekDOlJ|3wRK& ?EB7NzkOi]Z' );
define( 'NONCE_KEY',        '>Jx)jtz*um<yzqYf 2jQ =c6Bx&8rGAd#%[6t)x^Ai)K3|`y]vvyW/i=Rhj2(9<4' );
define( 'AUTH_SALT',        ',@m],<emy+Icxic:.}g|L+=.48<8/O|r9!KUkY0nuy@L,a(7*J6 lKIIb;x#{>x9' );
define( 'SECURE_AUTH_SALT', 'Nn[f?UZg0MuQlvK0pN{H@Fp)lj^+|(eunnC&T%=Rf6Bk%]shb25-7|6Bxh6T3u/v' );
define( 'LOGGED_IN_SALT',   '`oc[_Qlb77w~b=r}u5IBJN]50YG;F|42(DBf6/WFDX_=)#~ML,}2$~g*%,|!Ew~M' );
define( 'NONCE_SALT',       'Gw;BCK1 7.Xq29=QjY&?VPIU;-sZF#_@>Tq*9*l|oyK|4apZrZE_`@$Lc(4W<X/y' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
