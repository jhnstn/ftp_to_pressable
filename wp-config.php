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

/**
 * Database connection information is automatically provided.
 * There is no need to set or change the following database configuration
 * values:
 *   DB_HOST
 *   DB_NAME
 *   DB_USER
 *   DB_PASSWORD
 *   DB_CHARSET
 *   DB_COLLATE
 */

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'GmJ>FKrSP[~}IqlZW-UXItJ_A:yT,|BiwRfK9s;r2tM:OA4%}-eMaY_0p}@7X+B5');
define('SECURE_AUTH_KEY',  '{AT.hL2K}1bzrt(.za@eXoZr{,W@XXJCk2N6FWTZ5+3qkkhvBqcHAnkHK]loYBlG');
define('LOGGED_IN_KEY',    ')s!DviY[,e%JjJ]LBZM%+?u$xXPMNATWl]|]RvWOb0H#q%GXgzWzaRHX(@siHBYv');
define('NONCE_KEY',        ']3d3H1QYA<p2-BQb;vmJnQ)8fQ^OE2{4*Oay@SZRF){MYc7ECC++y49j5(Pzv,H*');
define('AUTH_SALT',        'a0*neCm1hPp:>F3CUbDMiNY+U*zV,R)ZhdD)^8D7wS{hgsLq]ls7ckII1UNZ:+|b');
define('SECURE_AUTH_SALT', 'c2eWB.ZVjt[]B#DD4l5(%l5e<w9XAWsUn!dHAx!5gWRYg>ze0BMJ;Cp0:!@AS|CP');
define('LOGGED_IN_SALT',   '}0W#hcy,{We-Q<C0cEk+>R0Z8cEjtyij2|~>5$**J@cS]$T.o+9z)Q@}h2$crq+^');
define('NONCE_SALT',       'EHz!*O<04dBP4x>nMfbf@slt]WRS7r{J}0#fe5:Ukqk+:<q}8$!;.amt*Rym4%x[');

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
