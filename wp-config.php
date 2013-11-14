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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'the$pectatorrocks');

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
define('AUTH_KEY',         'h6Z#5@TFxgm`PT {dV=%EJXRda&kYvTdHZAq,{Qt1C-SdbGm;e-A`?,vKB-~O-DL');
define('SECURE_AUTH_KEY',  'LIIHtBDNNZ(-,MOdG_$IbWClfAw*VXyzE`l-UNc?t4L|S^{#Mkr}x_&BM9E;>gEE');
define('LOGGED_IN_KEY',    'l-3C+o9_#;!UUG]Z-A5[M%i:)<1vN^,afbr%9lAa-X$n55lV8y+f1vL?xb4.1WBM');
define('NONCE_KEY',        '8}sSkNL&,l0@H+Y#n^+njtXXqp_u%@9Ls&8KhR0*Tz-*cU4|HuL.-o%S12UhO8_B');
define('AUTH_SALT',        'hY2+MnHFTUG+$IJi{btNtA)Zk+8|n.W7z^(V|U+2`+%jqJ>B/=>i^M#+&.w]HnWa');
define('SECURE_AUTH_SALT', 'RRM,W,aYhoCU]2*>^{ACISNOt7}d$_1M?5Pe9cng-F1~6cappC[Rg5ByHbKZ(3k!');
define('LOGGED_IN_SALT',   'mB9%?%JxEd +a5_V(C%XD<aMqFbAT4OkYIoM$_l.%paH/H2sQR1Sf)X?DeSh,CpV');
define('NONCE_SALT',       '^rRT`IE>cYCNlT]3nVw.9nQG/P * P>UWdw<-WL6-d[LZ#oQz#SXlqq ox<L]I*N');

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
