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
define( 'DB_NAME', 'wp_database' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_password' );

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
define( 'AUTH_KEY',         'VU[s@-f!anN{ZuYN.Ai1(3Y yRBwVK{l>&F5Eprtw<j-{F*ju-eds j_.eik*jVN' );
define( 'SECURE_AUTH_KEY',  'CG;.TIP)xNh.{<}N5FX03Wu(n6C!_@[tKT+?{lsMnl [)(gCFa|,SijJ~?LZB1[f' );
define( 'LOGGED_IN_KEY',    '7:GPzc[t3~hn` zR)8;V**G%8^=noH(b#99S8-ime}FD,/U_Zmfr]l?JI`G?u1G#' );
define( 'NONCE_KEY',        'FHp:E*aY7*Z!5CaUVf}RsNsA|AHW#><xS6n|@kA9}lR<6Nx+XT[^#A)#MK)I&,:{' );
define( 'AUTH_SALT',        'Ji^Ie7+l+7Y?;$7F!@Q.e:wHah*+lbEGK}br} |bSrsvH;.HlDrRR7@nSp8b-wyY' );
define( 'SECURE_AUTH_SALT', '3t?foi1YTH)6Ms8P;/9eii[SIXFVjSn$pF^No;*13?NFhK#s=l2|xu:CCEua#v78' );
define( 'LOGGED_IN_SALT',   '+#g2%fDrAmP/9vU~1v2;]7])E6&%6A70[fk[S7ymn|J!;<HzP+E^VZFh*&}juw%k' );
define( 'NONCE_SALT',       '+$HyRy6{Qg~l%-k<@n?4kGR}~py^6HI@GK,C`79De+3K_2VdU1yt RwtKfJR]%}A' );

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
