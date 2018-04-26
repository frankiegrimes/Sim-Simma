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
define('DB_NAME', 'simma_db');

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
define('AUTH_KEY',         'cBW@_rYei3k(Z)O9UH#mdTlE}U0fx>IJ LU8BV1g1!B+k%XoV`Y+^;I.>WXcbSt-');
define('SECURE_AUTH_KEY',  'nh?@FLXq8t%`=`V!o?DY*fIhH;4Hw>F{[;yj[a68Y?_U8CgsA<S_srbhd@&,dZtd');
define('LOGGED_IN_KEY',    ']0g2A8[B#lxn-Z:( aXO_rl+QAx_[C~n`_@$.cu|$)Q70UpP^:WAxv@*uGM,l<ox');
define('NONCE_KEY',        'Y}8k-[@$:~9*7Z}=_P$_HWyD:&)<I- [`_D=i=%+5j)_}IPS}lF32#PN:Kq8?nFo');
define('AUTH_SALT',        'jJK;vhwQ`Sdv3 {ZF5)e_qRD#@,-(%uHR97)]=W[dH0N~lkwUEt{Gr,oeh<Tc-D@');
define('SECURE_AUTH_SALT', ')A1PvwccbQ:y*t+5Le09yR5]9)@-x2z@c!2iD+]7V)[-<~;C1_34/K6`]@I@QGlH');
define('LOGGED_IN_SALT',   '9kW5iE(m8M+~BVUL9~gWY9iQoJ:Ly<}YaO_`96*q?Yp/u/=#rdrq0hk&//w/$!/6');
define('NONCE_SALT',       '/k/XPSJI%|tRD$5AwY[)++a5D8KO{!KC(Sx<>c+3Dv| hd9(eGM;DJk=(HPw(CC{');

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
