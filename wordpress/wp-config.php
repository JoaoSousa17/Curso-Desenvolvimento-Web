<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '&JId(UW0Sh%(~dH;{oG3M-4,h7H?x@jyT@D7mL~yI[tg[;o2XLO3)L~j}i*=N~$Y' );
define( 'SECURE_AUTH_KEY',  '50+Qk=kh|A5&(S[]nqJkTX-+|ucPtNqLn[/u4zC@aTW&I6,C$`{]]/8ZkW)!(,L/' );
define( 'LOGGED_IN_KEY',    '#2:d{lSZ>,:1jKk/4Em@{?mVY3CtimBt!+z46Myu411H9j2@RC5]_xJ0[q,1BNOT' );
define( 'NONCE_KEY',        'LR;AWSn_6b~DY7%+s`91;;A>{hz?PxkJ/oaU_<#h&Q6:+5z%:izfR9D[qyWH|0pb' );
define( 'AUTH_SALT',        'Su8Sf9bx=)_BDb1;*}v ~1/]^2^!tuuah/K5AOr*Kivf-I~BLn`|Gv80*7qJNE-5' );
define( 'SECURE_AUTH_SALT', 'R%%S|S&X[2`Yr%$wK[YP>{|wTZ-~[/:9gooy51UKl{Ta+/P@=c+ }qvWjHZ&eRp4' );
define( 'LOGGED_IN_SALT',   '%5-5/UJ#<E7-3kY+^YHlca1:Hy_[^<w()<5VC.N,OaB7n+0=MrJ;b>xfRLjG=lNf' );
define( 'NONCE_SALT',       'I512DE~I1se6aQv7)nWka.@=zr.= SVR,>yT|s[DxH<MOJ2yLVt,.br[*#HQJ7bV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
