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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_belajarwoo' );

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
define( 'AUTH_KEY',         '23{! ,~@/5c5I29=}xc*zGNo/r*kn}#hbh9I>8yR.4?$SLsifYz(]%O?VeEWB5O#' );
define( 'SECURE_AUTH_KEY',  '9v.hxLhYsyc6W&~A5zPDIv,n@BUYbD9ivzY{<I&l_jCN@>f&Mf;z4!T g,4+FYL4' );
define( 'LOGGED_IN_KEY',    'Vt]$8t?7M@LARH5G`UY+m(S[H`a(GHUk6izE))pa$E<229n16Uh[dss}Fx<n$$[R' );
define( 'NONCE_KEY',        '}0cPIJecuTlDq3utZUzmk@&UI#**y_5BbV~u3+TNm_*P&!d29n~B-G)W&iW,w|jr' );
define( 'AUTH_SALT',        'C4hJjI-fCundsK9Am&E|apSYH5!9+d]?aP!,@w/-]3NCMMk{.@]k&HJ}bY^2@#pq' );
define( 'SECURE_AUTH_SALT', '@[c+`6w,c[))J{%&7>n-NUJwOlD%qHoh.b0*,K&qx@W+5/TL# y|O3oMdgASIdl7' );
define( 'LOGGED_IN_SALT',   '=i}Y6]1LgZ#cui7eEf%$~@Iz ]D7(arvrWHi_.S8(V0)=qE1]~dI4*Gbl#!7r5IE' );
define( 'NONCE_SALT',       '>S#93rJ]lL#oB]t|~g5XM!WY=/9_%D@+1O0wMV8os]qUlOON1oMVdglTIT8w/B+-' );

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
