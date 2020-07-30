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
define( 'DB_NAME', 'wpBlog' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rute' );

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
define( 'AUTH_KEY',         'j8A{Y-}))aDdrwfJNXE7L38pd_nn}/l?  @ M.PmogyuIZ3H,-!j7Z_1,Q`1+R>t' );
define( 'SECURE_AUTH_KEY',  '6dKr(Tc-]rgU;bd[phF*&Jp(;~~<;a@ !q![J?Ijb5/iPLv/p2rfvMf?+wMWKT}Y' );
define( 'LOGGED_IN_KEY',    'QGquY^e|J>0j2MWbYDUC:v%!vy>_lP+i?p>RBxTO*kW/9T`8!mPbqN/lGx:Z]A}L' );
define( 'NONCE_KEY',        'aFjJww$,wp^r5(Z{u6Pt?#%et^X;yGOJQdYn7ibFd.J>@:Bxj0kHv+$g+0Tt8I$*' );
define( 'AUTH_SALT',        '_WkUD-j<mNFS<A@Qb<HdN?:<K[lGwsOFlw!C~i+3X`wyBcHxN[|kKNOk-.1=?LBL' );
define( 'SECURE_AUTH_SALT', 'H?zI_z4 ]LSe}eD@1Dx=C}BKhUNUAiL^J-L&@WxX#=>e[l5gM/]7:GuLg,H30W);' );
define( 'LOGGED_IN_SALT',   '4wi:=xM#XcTk,+<B)$Df>F?><C;yK)2/Xa-_e63eIT}+fSD>MpWI`KG tcT:D!Oy' );
define( 'NONCE_SALT',       'bv+/1_/TR!DJn45bQ/5qKFbn?a?&W8D0X#g5GmjEHBJ6p&Wk>_=0+Lj@1B;!Ch|W' );

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
