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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Google@123');

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
define('AUTH_KEY',         'XO=kAd) >g^2d&q)C-(7y>qwX!r6>GG3e{QsXu,JrL]2gK[JL}[RJ{~IRnF ,ud]');
define('SECURE_AUTH_KEY',  '97ZjM6CEV(Rb3j&{k)Uc;A,I%Pw8QB1OG M|:*:pdp3`r*3h{n>I`^Vq`2m^4!^*');
define('LOGGED_IN_KEY',    ';a+$jZ/&S^nKF$P%y0F0-h9*36JSXw?xCBz>?5=r&~gwE<Vsc)#1<w!=)hTX #3S');
define('NONCE_KEY',        '&/E:KVM0/6QY?~)PaY63`E1O)5#R`)jE<mvy8yIn,3/t(<wi&DFx[?;Ax).(zdlK');
define('AUTH_SALT',        'VI&y0}I,-_b(=LMUiNrZ@R6LVf|Fe3SX)qROV_v+[KbUC6-@lKgcZ~7jqr,D`gVs');
define('SECURE_AUTH_SALT', ']`xbI^k49^#)CXI84_u:=>D6;qf uAHHsk>AE9Q,Ga8L1P]$1_0jS}?kRZ]#]{lU');
define('LOGGED_IN_SALT',   'U~}jy)i9XS5D]?saL0m+3r<k4?:rW3=&kB[dXlN)|WYFQ#BZ=+ sJG1[Ty{5:GAw');
define('NONCE_SALT',       'G}btjg]%53{KfL{/|4hyexQOYPUh6g6o~%@G8L^2Ng?#kK_V=ylOY1:8j_ q$?0%');

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

