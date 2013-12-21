<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db499746437');

/** MySQL database username */
define('DB_USER', 'dbo499746437');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'db499746437.db.1and1.com');

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
define('AUTH_KEY',         'KhTtYyEMnozv1{wPTv}.-0f~4Tw)i@PxQ=makVB/w$L!KFo(C7 *8,7BMzwgIR*d');
define('SECURE_AUTH_KEY',  '?-l>U3UttJ|#hl^J+$uwQ)0^3I>ajnHBZ||%3{!&!yQ0%l2OP`xCQ=a?Gl%t)|`q');
define('LOGGED_IN_KEY',    'Hs04t~a-1+RGzE|^%3iyQ%p`%g{^I+!2-cvOWe4w<cS<(A[K[h-Cw`B::ZmN5$dp');
define('NONCE_KEY',        'ATV%W))7|K{@Cd|dcof}|k2Fl>VLw2%)AO~|v46*kSGM$tP+6|[&rf#=f.rh<<wm');
define('AUTH_SALT',        'Ns_ jRH<8GK]|G7]-/;lbS+:MR;_P&qeyE)9*oa#`nHoyXar:1V0e0$e7rvpqugF');
define('SECURE_AUTH_SALT', 'j+F#bPiu{MR4xisQM2k|Y,Qn-ngd@{0OcJp(=%@~;T`R#>O@%geFU?&s9X>A34fA');
define('LOGGED_IN_SALT',   '(6:I)C*A7nI(o[>eCKGQGR]T &@[&oLF80p3N2/==&+_eF]rSf|R 8jIgMUyFUR-');
define('NONCE_SALT',       'gzVCGN #D31Z`^E@OV2^7Cdt,2<NvbG]a3R[yW-.bMj}^lI|lvAh+lsKi]RN-T_>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
