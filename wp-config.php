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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ':fg*3tk*`lLF;FV?NO5o[;aCJSY;$M]LyL/_VW1;I^KYc]V$yD;_dvpB.vbE_NG)' );
define( 'SECURE_AUTH_KEY',  '%G3NK1TnO;%r#Me?r`UAs{s&a/Mu)N+RNCk9Zfh.Ty d!XE!x2nV+GDEA8uM&}?p' );
define( 'LOGGED_IN_KEY',    '/[vimkldj]3MUlIrV]!lS!A@&TO8mqupL=&=pPxg(!~*9?~7s[~:>#g6zyr^n*Ft' );
define( 'NONCE_KEY',        '#V5n+QTg(3qy`VwYe/r`y! In41yUuo-xO6+EEnU2oU*+P(8Qg[uJIOrq;W;8!(K' );
define( 'AUTH_SALT',        '@q4.D{I5$|V#kr}o^J.!q9cZr`M<v~]Z<rz!b:^|r X`p]ZW!XA6%?!m;uA?4,q9' );
define( 'SECURE_AUTH_SALT', '5gWm9pn!DwLm>A4A]Q,N 1vyx935:/~xkX(L[IKklP!3l?!wx|R&?@E;(__fp,3<' );
define( 'LOGGED_IN_SALT',   ')%!kBd<.ezaM5l`uK&s/Af-gR3/WVk#Mt7i( T6z}lnLhRV7Gw#=|T.;)QPXYwHw' );
define( 'NONCE_SALT',       'KnTFJr4^48;e1f[tT~MW+rgo-^q`[53nS bi~p_oJbmcN*J4Y#|gOK(oX]R,iS@t' );

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

define( 'WP_MEMORY_LIMIT', '512M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
