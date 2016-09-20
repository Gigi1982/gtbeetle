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
define('DB_NAME', 'gtbeetle_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '7Q&Ce$KY}!G?LgH3[QjhId_&QIUC`XBuc*o$.rQH.zEUbB@&8|yn72h{+Yn_H5P_');
define('SECURE_AUTH_KEY',  'j|f:*d_,MW)1P0Vw SHU7tm2A>5t,g!)hUqW.M[7_T&ckT02}qlfk=doQSoe2aW-');
define('LOGGED_IN_KEY',    'gF2(TDr*:}[7_h0%{/ jdRg^s$-l(c!%}u[vwp2MX<J>(-5~VSCV[z&^|D|/e42U');
define('NONCE_KEY',        'F:M*Z0TWbM?0MvyTEUAhC>A@)o(MI,`| E_&dc&-,.)D.oh8$#@BSWj77jS%6S}$');
define('AUTH_SALT',        'xZI$(M_ys}CUhjJYF$cY]`2)#~(idUu-X]bU<x+We`?xmRHa[AftP[?`73_bt3UA');
define('SECURE_AUTH_SALT', 'N=MB&VHN~1{H`[8s^sW*x@gBBV9js]EXP>#]K!l&r]I9b8IKu%^@eH^+ln{XFAD4');
define('LOGGED_IN_SALT',   'r;T<Oy)C~#6,;(<<A6$Un&zceu~p ;,g-;A+?`%bCc!AQy_M5i<Sq:` 04%pXWQo');
define('NONCE_SALT',       'U(]=J3DJu`qz[zYX}#g-m*z|2zdvJZ}(jXA(6P.xG!DDaXqzAj**I>D3`l5a&TI}');

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
