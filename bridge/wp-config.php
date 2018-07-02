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
define('DB_NAME', 'bridge');

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
define('AUTH_KEY',         '3V&^7>(-@ti,Oz:sTcNO:WWx<??8^HbuA@f59*%^yxNB^{@{TKbl3#5XY#yQBpIb');
define('SECURE_AUTH_KEY',  'ByQ.$9jW/Q3bD}agnJE;r9Omc>EHn;&CrB~]2zu^g3&<26wN]&&%w+|LUJINF#$B');
define('LOGGED_IN_KEY',    '{L$E]*7g)T#[ZTi&poD5dlhc/@T49,<bO4)v5k/%gtf*abLt+e9]oi^~#xiIGR71');
define('NONCE_KEY',        ')4U-;x<gQS{e.`8]O{(}u|K<dS)>.dUj5`@u9Fw8eW<z<oui/y3>KZ7<0-}$Jot#');
define('AUTH_SALT',        'T$sArG3>/9TGxy9B_S@EDuA&V&LIJ*-uoHog=*a1gU2}>p#}Ncfq7R<G|ugNT/*@');
define('SECURE_AUTH_SALT', '[aEN*{qJ,f{gTgL#W0j[LL8]Vm8j{)rXQ~8po}^[AiV=QWr4x }9Mi^?h #;2#h:');
define('LOGGED_IN_SALT',   'kD(QS<Em+Ub{XP%zpx3>h;[K_)c!_dl(izF=7X:p!SP>y_Qv3<9lk)&BNyXNq(JR');
define('NONCE_SALT',       'MP O>Mf*qyJf~|O^KD?/B%| pefJ(UVTO0LLweLqd{O4[/d*?s:o92N%;~ChvZ!X');

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
