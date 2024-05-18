<?php

define('WP_CACHE', true);

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landingu_wp801' );

/** Database username */
define( 'DB_USER', 'landingu_wp801' );

/** Database password */
define( 'DB_PASSWORD', '6S5-4p6Cn)' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'act4qnlhp7m4riimfdsxtv2i0lv2er7iewl8tps7kmkksjdj4xadtwqshbyxq0u6' );
define( 'SECURE_AUTH_KEY',  'ojpwcmvlvxy1us2lcvkfpj9nhhlv2qor7wdqk9swegyr6ihuzurrnhyblp1vtduh' );
define( 'LOGGED_IN_KEY',    'ewratas0bnnlt03jcgqnj2t2azjfneutumtfpqz3lns0k4bhal1ovljaoracy2ys' );
define( 'NONCE_KEY',        'htgjkquht3yok9lsjbvm39c0vuiijfhqezxcr3jy5krct6cbk5cwcx9fway19gog' );
define( 'AUTH_SALT',        'eh2rnosjmxzywgn8aso8ypkmidj04m1sjwreyjrxir4lbyvjmbsydcycbldkx1j5' );
define( 'SECURE_AUTH_SALT', 'gwnsyp8287czcdeuafrf2mawjz1zneoeoppbnhgt6pxzifx0c8p9r5ago2fpzvdv' );
define( 'LOGGED_IN_SALT',   'rr4s8ay21ah1iirwfbsjclunz7vvjhjzj6gzr5ptkrvfs2lk5meaq24t2g4gzpgt' );
define( 'NONCE_SALT',       'u8mdzmbufp7cgxhokx3gqcx9runwgnndozdteqmlvjbnpbbtnz7of5socxdwjakj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmo_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
