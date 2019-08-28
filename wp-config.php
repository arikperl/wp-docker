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
define('DB_NAME', 'wp4');

/** MySQL database username */
define('DB_USER', 'wpuser4');

/** MySQL database password */
define('DB_PASSWORD', 'password4');

/** MySQL hostname */
define('DB_HOST', '172.17.0.4');

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
define('AUTH_KEY',         '<p|T]I@{+0;h:_IK;]A9nffn#pH.2LR?Ml&.z1Zo/JxCB[A5r@~EK7?!%5q$ F]B');
define('SECURE_AUTH_KEY',  'kg; @Ib#Z~cExWIO_.}v4^&lDyBe5bw*0qp4T}|M.uQk(S?%[KsB*+4^M(O;HDOq');
define('LOGGED_IN_KEY',    'u28#(h-=`44XZqj47ml?$g:7_-4WiS=#k^DrofqRe&,VbeIai6SW-~6X?F:#ONt=');
define('NONCE_KEY',        '>t(:lzQBAti//aYy2zBBpGHj|8({_gfKRb? 2|`k{;m%!L/DZ  [i3?C2t(qLdiB');
define('AUTH_SALT',        '3uO0h%{fj)LFk`O/Md0{M<G^[5(?%ed[ kNb5a0-/F?D|F:gMM-Q=!BUj|&>~%~g');
define('SECURE_AUTH_SALT', '0 As)$,Dgxr_b#:IBSI[`54[5Bcl)dr1@U)gwe&6ZOR ctW4Gy{<T%x+@WCP/USU');
define('LOGGED_IN_SALT',   '{d]e%.)q`iGA9kjnq,<&wMN9)9`P&bjBl6NJZgCu2!cfz)cpM9rd57}E*~1cS@qs');
define('NONCE_SALT',       'B&q-.@>Snu]n?0Kp#Dd0)UC,>Uw o(c`hP~pqC(Bo%tNb-Hiq+9cqyJK,Da~9>E)');

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