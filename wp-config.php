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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         'BmowMdfY2zcv5Dw6|E:e$5d-eKycnU-EP,ZsQaJzAH;t;)7N(4T)u22?~,%1g}%6' );
define( 'SECURE_AUTH_KEY',  '5z$3>.yM-:[gct8t/0NX,0wMF{(`5z<bnAwJu14=[IP`K|UflC+ [Swi@UVYGbbn' );
define( 'LOGGED_IN_KEY',    'jj)sXffIc%_s9/,RxoA3DDl85p%D:o-<=e05-x[Sfe#sei&FZkU%n0yLD=9J2^V4' );
define( 'NONCE_KEY',        'T7m@DS/im./|}qE4NmMRXW0RPXwvB2p:3*[|:ON;!i-A7Jqw1:L?@z2~RmDRh}hL' );
define( 'AUTH_SALT',        'f96}J!=+pk 8U$!U+rOcF 4OSH9o],4J80uz[e(y-i*IlZ:t<e!|31q(dPMu!zU$' );
define( 'SECURE_AUTH_SALT', 'Y;:iYr1D>#q1bV;C~)F%HA EbyqLYF#G0giivc3x3v=&{<l*}L8N/:=I^$A0uACr' );
define( 'LOGGED_IN_SALT',   'f8i7oUL^Ggw|uni,Ff4?Vya;dcf!BrVaglXd.luj0 YV+Zr^-ZX<cI)a(T(o]+{k' );
define( 'NONCE_SALT',       'H`h?* %pb[acy[qnk;|agG!7E)HRJ=G!UQX1L|8B=>DnyEe.u1/S-EykkcFWq!-`' );

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
