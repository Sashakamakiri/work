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
define('DB_NAME', 'pols1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'z}u!i,,|+e#P-g@/E`,b._.)`1bmxA oP;^RX`[2f|$9D1wDBko?tG!cb[&N[$|$');
define('SECURE_AUTH_KEY',  '#@xvl^<M.9we{av7Qh~i. -CPM-6hj|g45PC-EhNGS|!+a;*HiBfu6r8RVeW)W}T');
define('LOGGED_IN_KEY',    'l@ASrrv8{8-qqJ-bqpDvda5j-`2|)Eo;{RcrLR-}Nr 1)TMv$TdcI~-|~:=](+X ');
define('NONCE_KEY',        '*ckwNi6x4H13pP:n IG,ccZ|^]?N C&~iB-tRE6E3+,|I|<.G#smd`c]%vlSCsnR');
define('AUTH_SALT',        'I<P=2@_--dyi8gwV*k!Yviiu`e(/yeNGI@+C/7>y@s8C#N%{{N~E%E6u=D[*}<-a');
define('SECURE_AUTH_SALT', 'e$tM(ny1O%[CQPc[P[1WV? f|Z(!ok<($W^a/e/)hMwFf9l8)H^nt|/ >it_&fJv');
define('LOGGED_IN_SALT',   'vW*@r-Fk4<Ngi)Nt;T!sDqc,IIW!=<=`^lFxtq[PBK:CFsNg[X_}7]=D2d;wyksB');
define('NONCE_SALT',       '`aVH!P8/x/ 5;695 /qQ!8AXX8=tv?;zn-RI#I 40[K^$a#q>h#gpOzr;N_7H5ih');

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
