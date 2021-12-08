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
define( 'DB_NAME', 'greyfilm_data' );

/** MySQL database username */
define( 'DB_USER', 'greyfilm_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '?k2%7cm5^6df' );

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
define( 'AUTH_KEY',         'j0H@bZv+E&:}0o(G[v%HJ710{CXs8h58]@,)3jv0V~g87|+7t]-E_Gz9LzpMTfUX' );
define( 'SECURE_AUTH_KEY',  'D@ 3B!sdLVH=pl>D5nlKrmr=6}PE/3(6Kwl^_6=[w5b7!}y_]J8+5%iDA1SXrE7W' );
define( 'LOGGED_IN_KEY',    '0RMF~ak;SpD7ynXc01^VIaKZ:5IHOYUmlDWn=/c}xowH**i&:JSha^vD(f^RkmR*' );
define( 'NONCE_KEY',        '@F|*m*]$l`@TS-fakikRJ>(0B-V#edS:Y.mQ^[j|sMfz_+dwLZi=OmpvH8/ C*[&' );
define( 'AUTH_SALT',        '|L1Xq<R0q=#H+{p]G2)-oXn2x=.AYi2DPO:Tm+`#P`iu_Q-7Be7%~>?insd4Cs|u' );
define( 'SECURE_AUTH_SALT', 'd_L1p@1a}u(R,ze=LAl}a5YG:(u`@sBiJ.[NwLa<`PZ3lfMfD@yVLCgdu5+jVcpV' );
define( 'LOGGED_IN_SALT',   'z70etbJw,-R`5V)&Z1i}PcPyaKHY|-n`-~)$LWl<c2}&pwHVL|TB&5,xlkakde0w' );
define( 'NONCE_SALT',       '-}(SY%Vt[[3F_v`rjyUY>Z9D?A<@5dOKcuwiT9 AWF31#mB-X2bDi5?_oI?OZC#$' );

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
