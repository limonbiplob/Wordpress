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
define('DB_NAME', 'astraelementor');

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
define('AUTH_KEY',         '%@nC&%^wLF]/#YC|w,%tRs`?1HB*SZSEf_Qs4le0^+.Bu^#X$v7jaQvxFniPD8N4');
define('SECURE_AUTH_KEY',  'NcLLI)%2sKX9Ld#{u|qiL@J+Tzzb7;_fc+n.g^Nv@{S}g&NvQ7+._E`8DKXKd9!S');
define('LOGGED_IN_KEY',    '7cp!`UZUC>2`)]n_SKu}E<Eh)Ve*wd/Sr*l9R.nI<D:I=pqb5*x$+m<~mL*5zo@ ');
define('NONCE_KEY',        'g[s*92H9vG+?!mUR>s#,Q0Epb{,<3]47{vRj(7h5#zun@#>aG+WaV~69<vr#-t#^');
define('AUTH_SALT',        'a1x.:R/BS}/z(_dG FFSpl;0J?G*M:e]e.:A_wzdH(DP<L:XpDlo7q3t$i)sKV=]');
define('SECURE_AUTH_SALT', '+)%/bI$Ghzr(TPK#C*AqaUhCvaY3V6/v[Y{jvAwnVvs#( ?b5)bEY#sksJ_YbF-G');
define('LOGGED_IN_SALT',   '%,K|0g6fzwpXY@P?Y.Q{CA|h=4,:/EE5HKi9:R4~XL:j@?sN0v.t1*pmh{(yt#d*');
define('NONCE_SALT',       '(fM$~wReNQ5cg8O$uaFoi2Go:3YApu{6E)e>`Z+n?lwKH,xSCeWDwU6KWTh&TxAC');

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
