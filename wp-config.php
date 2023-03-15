<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u795941923_3bl0J' );

/** Database username */
define( 'DB_USER', 'u795941923_l5uzt' );

/** Database password */
define( 'DB_PASSWORD', 'Ks2wtfysae' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'L<k8Y::uzaRR ~PICcU>!Gr*|XBtgeW+VM6&}!|27,Zu_E!QM7P,>-LU]GuJ=.`v' );
define( 'SECURE_AUTH_KEY',   '6(a-C`AX3cQtoAsxA# th}A4cJ${(f5g7G:MwSdtY1Z*= G-+9ZK5]C6;M&9,@#t' );
define( 'LOGGED_IN_KEY',     '$[ZEFZ=Ciq`5Wcs/&|Y{GE.h3(JrSSmB  Hz/iFBB)&LqY~&)%M2v?V`n:L)59.-' );
define( 'NONCE_KEY',         '@Mj{AE!BH4L=2p+I1Amm@^(X/9!U]@t>7g~337rhl+Bsq.*G81?)Zx}%]uyHqfuu' );
define( 'AUTH_SALT',         'xZ)b|{_$aFd]Py5h%Wqz)*=ZonnPpX^rn/I4rgCF&@{fv1Rf2Q%ZL_}MxW:J<S]*' );
define( 'SECURE_AUTH_SALT',  '3vQP1$W:sye@UG?2+! Zo2-HvxH97/J@~o,OrSg+{Xjutoc0~EHlibT{7J;vH+aW' );
define( 'LOGGED_IN_SALT',    'T]cj=tC(_7/T7N][ed|uAW-C VWf8dv!-qT~U-ds:73:@{veZ;,U9n%] frfh/5H' );
define( 'NONCE_SALT',        '&S$8,(]2 _:kP0PL1{PO13l({Z&6OvBpkeu{CCZT6!nI}FYqh=.8DpwM17<^=~Dw' );
define( 'WP_CACHE_KEY_SALT', 'Q-.poy&>#)g}Oab2cyR9 (OCGuoqPZk`MG4bCDYfS4<tyENRI^<W,0?-C(Y[UYmM' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
