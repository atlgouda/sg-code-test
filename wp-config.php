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
define( 'DB_NAME', 'new_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'gouda' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wpgouda' );

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
define( 'AUTH_KEY',         '7/wV&L{Bf7NN,e(G*<53?o}XDRVEVpkxakj+pC.jO@p0[/,TH*he>uN6!xd9%9RB' );
define( 'SECURE_AUTH_KEY',  '}=io; 5z-;F=B:+q:^#[wkwzZge+2<;sPZ2`360]D,BM$V[LC^ M*cnC03 (*Ir|' );
define( 'LOGGED_IN_KEY',    'nYE~05WLHA2TJ#6HB8Z]H}#@3LbgG^T^Wpx7{]dEis|Ug.#q:+Pcf|mX22?<nS$/' );
define( 'NONCE_KEY',        'Bq!*c8ZdC96H0=kSsf@h) U-- .I,TJ<JthC+O+y=.xP]fEWZ!*sG`tlwZ5e<lW+' );
define( 'AUTH_SALT',        'zQqq yoVX_#rWA.r,/:uIS~4O>008p{|u-<kpH7!o?XdNqw{!TgvY !Eo>7@(GoG' );
define( 'SECURE_AUTH_SALT', 'rt[Mp`1*16b1&O{YQ|-_dj^3J$eYv;sAhF}bw.0&fj;K,m.-/w^D{1q=d)`?Jw[6' );
define( 'LOGGED_IN_SALT',   '7@_^<?T.Kbci(WjziGI}qiT1r2)L6Sa;@Xw~zTCGEU/?!SHm^q_;f&@H8O@&:m3;' );
define( 'NONCE_SALT',       'yS#`RmD cm2`|}3|zUQ?q(wQnbH{yE9Hy |QDaP+~VCPp:z)`9ZLM6=EY_dLo&q!' );

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
