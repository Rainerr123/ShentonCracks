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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shentoncracks_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!ST7Ky&E$4L7FWTCz(DCDX[z|(yX^ff,|GjHUo +EQ6Ulo|9_{%Q8>C(f6jDO;P.' );
define( 'SECURE_AUTH_KEY',  'a-wjaF9cT@m~PHD`*HtCs3/W*_`>}fEookLPKFV(?^urxWE5*x:,T|CNxq%5:F4G' );
define( 'LOGGED_IN_KEY',    'QboZ+= )i UYTAhrj1PF#K!t&_f=)yJ}eJV^ntV#=*&C05qAC7RP~mKW]m:s,CL,' );
define( 'NONCE_KEY',        '{5vmb3<apB{hACBJzM7=>pk<>V@l4X;{TI<g=s.vJ#ovIvit7jT,92oIp?(N.%g#' );
define( 'AUTH_SALT',        '~$]f^rbRW8MAMmy9rg32}+VIG%Q:M^WUhYM&a%fWq,E&eQ=+x)vQc4Le0%z=a2k9' );
define( 'SECURE_AUTH_SALT', '(g)p:2Q2Q+pGifm`:7qos @5OQ] q0/y_l1_q6F514/ })$.2yo/RyRq-h<(52/a' );
define( 'LOGGED_IN_SALT',   ':gQE.k`6GwKSYTK3Xz5-s7I#`49S{#*UY*%=j2`Oe{:aAkLi<$wy(]RnAZebE`uz' );
define( 'NONCE_SALT',       'hTki]kke?A1w=CQMXQdBBUCuK!s5 QdWW0k!ZhIoxpM,Gs^2CpCbK-!e)ij!eh(f' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
@ini_set('upload_max_size' , '5000M' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
