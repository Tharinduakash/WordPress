<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'OCwqa2d+bDszWU52ZGQ4K3dBK3NjPHoyJGhAODRELCpiVGReQUEkWXdVayBRcDw7L2JCM056NlkuZXBEWzlYWg==' );

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
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'i~b|lrOW.n,,+4Tz>|V,WqpueB^U)9<+N5v3lM!c+:n*#-6n`b2:#sD*7>52`z1t' );
define( 'SECURE_AUTH_KEY',  '%iam7#gM2[-Eg{So5U.G/r@As2~~~~mLGNoAroz}?{Eo.vK4SVc6BUXPRtKCp_rV' );
define( 'LOGGED_IN_KEY',    'XOhj!-}:a`*B2NWy-A9A,[@M`,IMqYm8Dp^ RnC[~Y!:LDm*|;!f)0X- n!`vR3$' );
define( 'NONCE_KEY',        '3#`eyt`h_Zi8dRR<7o.:PcLFoCOWCyjwtVlXxK$`Ch;!E~j1}a~NT~8l5_8_k(WM' );
define( 'AUTH_SALT',        '1+9M]5weOrF#AS.3A?<JgHt#@Mh!0yTWr&q,bKi.U<ISZT 4zDv|t>{k,h6,Xc%#' );
define( 'SECURE_AUTH_SALT', 'w4DQ|LxO-6#Dly1J.h}pSC>w:,]~iwGs=l4Hu^@9}wW)@>!,)#cAYYyxYQWs!RYH' );
define( 'LOGGED_IN_SALT',   'M<8EBI48;RmRIJ1k@D+xT+US?KkY^&GPuO2F&pa]}>Pgo4a0`4k__DD?|lAxp$hK' );
define( 'NONCE_SALT',       '1PQrK#6%4A~,REzI/vT</u)0$d=^_on.o@,q;fLMM-s^f=1#Rsk84$XB=h:V9~}8' );

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
