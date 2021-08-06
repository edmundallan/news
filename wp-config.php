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
define( 'DB_NAME', 'edmund' );

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
define( 'AUTH_KEY',         '&vf!]}!FSEe.W}0@;+#pS~D&P7/geBMKCbR.ApTIh#a#Z/7?Xc.y3f4aHO^M}~Hf' );
define( 'SECURE_AUTH_KEY',  '/l*bka,_*XLF+0YZ0 )3|K.ysVo&/:H=M4hyV>LW*C<Qej:B2|$G%H*[,6TUBtPZ' );
define( 'LOGGED_IN_KEY',    'gxDgimI=!DIZI]SDyVXU+%m6N#oc:1?o0z(O,pJM=]ORdi{y0S1n I,>WP(f>58X' );
define( 'NONCE_KEY',        '0n[?>mZgjJnl }|3>^?lG*g%p7`#QP8v`&Pw0B6GK&nq-K5-kyX]ayH*R29;-pHi' );
define( 'AUTH_SALT',        '$N%E_;Wend`m+@ Q529DwO9g{Q^fqMe~6tHZ,e5l?.,]`|m1g%Y5@^9?NH*Pw5t!' );
define( 'SECURE_AUTH_SALT', '<tZ;$22LM#4QnGrk-!_Q:z*#4_0qCuQ*&{tXFkK?&QRt9*NXfB-nyx^8atG0@V!7' );
define( 'LOGGED_IN_SALT',   'd?da/-[rQ+0P;2fRpsY*()(Aa,px_*bifoA%$PE8]z!}*]>g={/-A:Y=wTHe>Whg' );
define( 'NONCE_SALT',       '7<`<[-EJ)E^9yEZ*ll|0tvIu?x ^l[u&OZgjNrTTBZ1~G7(vFpKgbHUx:%w~sY(5' );

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

// linux image upload
define('FS_METHOD','direct');