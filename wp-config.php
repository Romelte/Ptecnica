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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digital' );

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
define( 'AUTH_KEY',         'LR|`fp#s`l#0nGFi.;e0v2a+DMh/=J3wgbYT)M!fKFAfy)PN}P}=:OM}Z0%s{fw>' );
define( 'SECURE_AUTH_KEY',  'z~&_%*Dy0(Q0B3XTXltJa9UwR~k.q=G5Y7DM=As)%9I)q+>c,$LJpq>bU2;I=-K8' );
define( 'LOGGED_IN_KEY',    '&Fgw?n1mk?R.+:}v3&X^FjXP-SN<JdPI:2YJ#66`Y]4L9Tjp{(9n$;(hU_k1s_]L' );
define( 'NONCE_KEY',        'FHTewUGK9tCMeL,!j/)nI%h_GD!41S<W=Ng`3QNXWB{Jd? pb.pe4p&|{T3]yleU' );
define( 'AUTH_SALT',        'UK6v(H;]zlI7Uth1C+?jy.ss~<yN@ZK}G-qy~Tz3Cb4rocdUD`K`ZGC:RYI|A5/t' );
define( 'SECURE_AUTH_SALT', '|@1 Wo*_8U9D#Y d2hyn;1tO,=?=%45XPjON!Xw_Y1WOL$961*)0eR*W3kiFOrNf' );
define( 'LOGGED_IN_SALT',   '$PYDd$[ZY&F0efJpl;c(R9/7EVBrgO2|$;Wu|I{oYLH;~m`Vf]bQ!G^jeFW=VwOR' );
define( 'NONCE_SALT',       ']#qen2)n/HQz%2aAAg*sRu#~YW>K1(m8}oMDB,RW)M?0tifA9BT1SEx-c+x?F(yz' );

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
