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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mondaycode');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8_#bTV~rdh4kOMuvXtro<aX2uLD+>M-z2umLYdu,xpp/c7WgYTgc;a4zd)`kLLt^');
define('SECURE_AUTH_KEY',  'I%%yH9]g#_Xkc(y.-Qx_QL uQnl0T} 4^{k8v)Is>Y;%>yxcWUt>d%@D>SizJ3EK');
define('LOGGED_IN_KEY',    '^<YV1*|~j]eU@Lp30lScLQR~^,DW:V7rj3@bqMjX~C}, $7 7W3-RRU7Rp&oo61W');
define('NONCE_KEY',        'N_`7FON Z`L]MF}[pb %Fb&mZid~JPaQ+3:/T:+;M>U@~loB1%dQ29rq+kmSYl6>');
define('AUTH_SALT',        '+t5qlu65{@;M3X.0iO,0O$B+dFtJ2.meFJsf#F/OIIq]7=WFiFj19jCq76jUm!fA');
define('SECURE_AUTH_SALT', '#$Y{F3Pqe}O>*UYLZJxh!]_7D8A1TvK.g7J2fC$TL@AToc)(IVwn_X`;W#tz~~Zg');
define('LOGGED_IN_SALT',   'XAScO+ysPF4lQ}@]o$sf/f0mr,e={;;J7wu$3rR1ns4_Rg3!W%U3$^t;ix-Mk63C');
define('NONCE_SALT',       'km~9DxVt~:?>tgBBg84[1D_sEbP$LuJXf8en+YYQoru1Z2jaB,ysgI7N.fKN7q+4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
