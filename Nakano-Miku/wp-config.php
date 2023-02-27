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
define( 'DB_NAME', 'Nakano-Miku' );

/** Database username */
define( 'DB_USER', 'Nakano-Miku' );

/** Database password */
define( 'DB_PASSWORD', 'van0362769381' );

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
define( 'AUTH_KEY',         '<;#C~=HSh^I@VIgb,a@>8WB}FZ;6,O8%D}>BUDc}]NGQ[KPN<,PTbG;,-gwNLKqk' );
define( 'SECURE_AUTH_KEY',  'MMvj)Nvi:#{*D)F5z1jp;*}K:zCwni8;K5Ob<>NX 3^.rTleQ6HmK.^9yQ(8ErO~' );
define( 'LOGGED_IN_KEY',    ';3WYpv9|zDeu.&_1q=OsP}|M7ML,c0&7MPLB_DAD2d&WKY^kyUI GDPq(_uU=tAo' );
define( 'NONCE_KEY',        'Zv=)fb.Al?WMU3/#!*d ?RV~`w?Z2?NLVhNC.J%4k&Jx#Rg>{RiHD/eut`x54IUW' );
define( 'AUTH_SALT',        '$x}c)d$y|5_AfBD>R)j4H%55^bl[#!|Um8{+ug7e1FqD^U.jzN?ktJ#]2kfGiN)J' );
define( 'SECURE_AUTH_SALT', 'XDn4nn[=TC$07*WfmxneM&yxP1<uYvQH NJY D][)^f+C4>9Zq8yqMrwnd<i.vh<' );
define( 'LOGGED_IN_SALT',   'QIvBhj%#2h-z1SP*_!@r:IX$Sl@4 2PF4238UVS*QUti5Yb(b9Hq<EJyX3]F+g&:' );
define( 'NONCE_SALT',       'Lo6U]cnN2lxjWO)9YN,sGE9`m6HUIxrE g)c|1 ke)u<4Imo8oPL#Ke3OG?m7_Av' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
