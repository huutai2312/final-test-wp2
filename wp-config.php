<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'finaltestw2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '#9D.C{TC&j{[~GcU_71gsp5+i2,+!,o#f<!cre4t6JQgUko/|,X14W!~baojXylA' );
define( 'SECURE_AUTH_KEY',  '/p1z@.iwNe[1V|zel,{)^oi.0`TSi&&ng:DR6)cd>=jM;0CbA=,fZ(p<<dXW6G0a' );
define( 'LOGGED_IN_KEY',    'A}+JP3ZiwcIp6a[1<*]%s| |5><zDtV>#yGy1Ut},:K EYuBPen0q-:>0p.VFB&v' );
define( 'NONCE_KEY',        'DNhss+r6hGl]Ac_3-8tQ;+a:$m}f9/S!&}g#Oj&!YzcAt@q7Z2o00sWe)H[K3i4H' );
define( 'AUTH_SALT',        '3L.DD3f.bw,d48t+W;F8,>LHmboD{9X4#Z9qk;y3fEH+>lX7H$nP&#.1PJv{]b _' );
define( 'SECURE_AUTH_SALT', 'wgk]~FifM<m%&^|.&Ugz,?3lBj%1g%687K] m*tTMRaYB^*-S2>%R4%yE%:ENXOx' );
define( 'LOGGED_IN_SALT',   'V9Za4dH+vTa&t<Qy~XJ>LQ50lq`o<+-zeO)We!(n-~>!]8p=RR)y+U-K1O<1cHRn' );
define( 'NONCE_SALT',       'U(4E.o3G[rF65YF2r<8RnOIm!w~bM#nj <q-m<.#XW)g8fcwA3=^ep0Mxj6P1A:&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
