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
define( 'DB_NAME', 'musicwordpress' );

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
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'FX2jlTb PoOy_e@+_LJmJ`;Z&dLtjp=GCmD26s8f73V&bEAA[d0. zqCQv6%di=-' );
define( 'SECURE_AUTH_KEY',  '2|H(E:a#S.o~~:j!=tx(Qy;2FSSda@lf:iN@][rg~)qB22KlrADlp.9ec(l>TKcd' );
define( 'LOGGED_IN_KEY',    'f}kS5Rbo5lGj-]xG_{3~gdh1R+QS(uQ)Os|o+YEsI(3E)1N>HvbT}B{umRD!2YX>' );
define( 'NONCE_KEY',        '.t _zzw0D$H)(T]m-T(wioykTw^K,`{W]=|9tK9.CWel0,@BtkW_)ZYSReo)79T ' );
define( 'AUTH_SALT',        'r@=grKHX?bsW2;f}J*3!z_+-8VyyLH@P*Y-<p#t2jki*~eAxYgOJ{C%AjmB0519/' );
define( 'SECURE_AUTH_SALT', ': mAq;-uSne8[`86R^}%`/u<sVh2j<a]!~C9S#DmOv5jc9o%nG/b&dKcc.R*PXO$' );
define( 'LOGGED_IN_SALT',   'Nq~.it+@ieJY2uONX`,5wsdlhur nFN0S=6_u=tMDf ^|i<l?g0+Mv$kA8|yAOxg' );
define( 'NONCE_SALT',       '<P<p0w@eOlsp%j$7uHZwV11; W$)U@Om[&aK`1ApQw~Y^E@~rKT:Hw@g;<^5iOYb' );

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
