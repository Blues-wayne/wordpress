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
define('DB_NAME', 'wordpressblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Love123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '(1PZ}8^U1n7WC}z._ Gp:v(;}XGu:}93F@_`#M2t&H+-QmWP~RC$ f.(iTK61%-Y');
define('SECURE_AUTH_KEY',  'juQ#b}PokP}/(Y0Xr05,o$)_HGRM>qH_rs2~Srsa4a|9IJcY<68M*M&19pq=1N|(');
define('LOGGED_IN_KEY',    '/<K$PXk|g.=AY,~nf.+fP1HBCU-WXU~#Ww)Q8,!z5m?c(&?x~Cz9($QZ+wP0=%1}');
define('NONCE_KEY',        'cA5k~uYw{jY,;/.^)CY#T)?wtmz9|mnV?yAf;_IB)|b65GNu)4Ej2YN%^?$.dG/O');
define('AUTH_SALT',        'UITP=z|c=7k,<Aot,8(e5jF eu*X4Zhq7Q|$#HDWEq;99F[7R|l[51>>%lQ&Nj>m');
define('SECURE_AUTH_SALT', ')Oh,k9wO=Nqik0K!:jUONu,e^CA|>aU_*_sS+OoyU7Vu>vZ@iB`x5E 7ojp_&i@5');
define('LOGGED_IN_SALT',   '3s6[LtesSybKxjW5SfS 7$&`X)OB0^|OpJP?&%1[OnU^t~.9T#RI46eV3L3ic_<Y');
define('NONCE_SALT',       '2PJQK[~w?DsIXAKAlC4GXfsPPc1rQZB!P#8l6G2H.y_GV}K~:-Df0#&Xzl#fY= u');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
