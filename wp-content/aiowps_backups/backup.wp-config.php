<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'admin_cloudband12');

/** MySQL database username */
define('DB_USER', 'cloudweb2');

/** MySQL database password */
define('DB_PASSWORD', 'T1f5sm?7');

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
define('AUTH_KEY',         '-HW?kOpx;W,%IOI{S1?cR[|426RZ}Dru8N^7;nS&*MW)-~|>M.ew.ouP(K66YhHr');
define('SECURE_AUTH_KEY',  '=lTe9*7fMo}mhZiuZx,>[]MM^a k4Wz+@78n2E1Zj1E*T~sk%W?gjpUmiTMmFN+`');
define('LOGGED_IN_KEY',    '}}uJu2tPp%||L[N~aLefl`dP$ygZH`!=9+s?._:d@.mR|r3#?_cB+Q%PM}UPmX;B');
define('NONCE_KEY',        '6@CZ/5IedJx@$9e]/+-0q|dT-j]ys_*+iE|cMFl}[ft8rq%Y-]Myq]OWJ%Kj=jr|');
define('AUTH_SALT',        'IW$`;%#NTL9uu)/Cr#d>@Y|m^[#Bf_L7A3r/]k!Y5tv54+]*;+0jgi-<8/:=xe`#');
define('SECURE_AUTH_SALT', 'w /mX]?BlgzFAdbA RnKzgL+ QK,X#hF3p}K){iL=Fy MxRuo)|Y?&d>bnO{VGyP');
define('LOGGED_IN_SALT',   'M4u84? 3<?am}w7*|`M-a</Jb55HV/)KLmL<J!}m}2zitdLj[Rj:Wa4 @l++a7Po');
define('NONCE_SALT',       'qCiHpS=+jfKVZ!}kmYD8ffsPi;JNc^!v:>2rEP;1]u^9EaE=}$uT:D#_N07>hVf_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
