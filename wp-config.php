<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// define('FS_METHOD', 'direct');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testqwords' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

// define('FS_METHOD', 'ftpsockets');
define('FTP_BASE', '/opt/lampp/htdocs/testqwords');

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
define( 'AUTH_KEY',         'a0Pib$/=u2eEScblU?)7!1?[,Z3xOrX5cOs<dp{^Iw8(_xPLQxU-`5$`ostyyL-G' );
define( 'SECURE_AUTH_KEY',  '70tDP5{R!1g?%:^o9(zW+{^K{lXiRWfrS-WuIV*%D;(3CO)YNGtSC[Y<k5X:tfK]' );
define( 'LOGGED_IN_KEY',    '|ROw,7<UcM+!NrOBK$BP<Yr%!Xy9Z[8,Mjx~850OjeMM6PSoWY~2uOLg=@sZO(45' );
define( 'NONCE_KEY',        'xO|;b+:Z1eVGx[bUZi!tsHa>+)YKbykb[IrMb3V/u0/2cJ%ZQjio:+zSej 0XlvD' );
define( 'AUTH_SALT',        'fIS,a9 wic}T#Nd xBLjjlc~Rj)8g*WVcoLFh<]cE3&O50<`S0[k6YR8V3f*PW/=' );
define( 'SECURE_AUTH_SALT', '9{mvyt3)ALSI8X{g94~RPzIAvZG-UAP !b-?zFZYHWRI5P<CV.%/el)YL)oW:]v_' );
define( 'LOGGED_IN_SALT',   '3yteR0Hr9HFFA~Wdi<Im99`e9]4)l]eU Q]-Xb@dv+M;nOK0CDuFx]i*xNR*2k4K' );
define( 'NONCE_SALT',       'WjEoWTJT&-y^`>_0(aM?#zU5T#]C&b^>I6Q_?=0zHJh/RU),:29I(VWhiCB]0p}-' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
