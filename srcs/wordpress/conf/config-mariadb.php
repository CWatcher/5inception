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
// define( 'DB_NAME', getenv('DB_NAME') );
define( 'DB_NAME', 'wp' );

/** MySQL database username */
// define( 'DB_USER', getenv('DB_USER') );
define( 'DB_USER', 'wp' );

/** MySQL database password */
// define( 'DB_PASSWORD', getenv('DB_PASSWORD') );
define( 'DB_PASSWORD', 'ft' );

/** MySQL hostname */
// define( 'DB_HOST', getenv('DB_HOST') );
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         '+S7~9hz#:+4!kW`:h0]suZXN@K?nPqFpN d-E1fM}1j|^vYtih6Q/>g71S0c]?SE');
define('SECURE_AUTH_KEY',  '+9NRI3&O(l1*(dzh$x>x?0G*l7$TvSND0WC,*!9Ni5M1M&fT+K)s?l.v/LYKuw+^');
define('LOGGED_IN_KEY',    'c-M7_4OhzbQg4v*rI?5Qm:Q-<Ou7Mmqb#+A.O=`:eO(b3UZ j? `xVRi@jB!4OLc');
define('NONCE_KEY',        'L jnf+u(I.zg;<sKQ.!6kW, ig]|AyQ(# Zb`P,1/5vK-vo[!>=|(Tj;OuA-X39:');
define('AUTH_SALT',        'PQ)b6};D%dY0xzSx@{qUx`x]l&_- 7x}6A-TH>hK2Y,s>;-:>:/O^@P=+p8TvX,Z');
define('SECURE_AUTH_SALT', '2.K~Bt]nUKj[Tyqkpi_yS+2fZos{d?3LVT4=9c;3DWk0.T|R6`B,f! 0$yLcFt*$');
define('LOGGED_IN_SALT',   '+MsYZUwe[_xG.(&<{a|ite)VQ/CvSg!v|Ep.WXO@w1u;,mS@i-+lks+|sL3`iq;f');
define('NONCE_SALT',       'v+/;i]]Q45Xsg5G^CV]z#xxkIkWNIH2QQTcmd_m9Hf[geb9q5E]m8U32ji$!b1:-');

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
