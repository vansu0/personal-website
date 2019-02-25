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
define('DB_NAME', 'vansunguyen');

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
define('AUTH_KEY',         'am6s0{=gyGhRxFIrq!A7wSRVh6kg x]%$=??v(xhHzkz]-^/=M6DlXB}<xnTKN7%');
define('SECURE_AUTH_KEY',  ';0:?KBH9&/W/_;BQ]z%q1~05y.?]h-wlUP4.!bb7Gk5[K2V$CO0r[PeE7o_3kLQ@');
define('LOGGED_IN_KEY',    'QSB(Q7arpd[se^.H>nJ|0&:&B[1>Ys)cIcd+@k{[IuutM/mr6yB|-o2/6>H #U|X');
define('NONCE_KEY',        'Hoy$X81Sc)yF2n-Linc-k9sppc&J)CUd>hVf9qV4 B-_e`0NRW]y{|t_KbaYw_SP');
define('AUTH_SALT',        'zIT_~?k3!<|R*//1T?hR;@}G`P,8Q1Gn1si/%bga:}!G?rfE^ZvHkc_%7:J(%HWZ');
define('SECURE_AUTH_SALT', '^3c=yRwj*CR(AP2z-!/3 ORoxf#tue.H:f9@/:r&05w1>`Ta!)0{DHjM[79`l^<|');
define('LOGGED_IN_SALT',   '+f]<5d3:G>:u+lXmao#MKQXQs1pFn|jpg&;YotgW:fq3]qXTCT$1SMt:QfKs.,s4');
define('NONCE_SALT',       '~Rw~],[6?%Jw8rTZyl%r|[#|KqC1m9hL/HQS]` wtCvu}s6=o*%kyxl>K7atw|~L');

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
