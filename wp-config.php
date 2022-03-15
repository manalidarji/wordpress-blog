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
define( 'DB_NAME', 'wordpress-blog' );

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
define( 'AUTH_KEY',         '5mBG|?p?;1?(7CdIiC@)x23bdvJe~5$W$IRQrT`IJON|$O~f[hbX+3-Ci.Yt[oVI' );
define( 'SECURE_AUTH_KEY',  'LGfSkm{J7Z9QG@*g;@R  !`9,m$8y$Gys:=[zhNG64p1{/-<I5tD%~H])4]yKs9@' );
define( 'LOGGED_IN_KEY',    'CqKBM|Fd%IVy+$:;QBxr~U9a&YP?6~L}}dSr;qu-lAna<A]#Ub]2d GdlF@9 $|y' );
define( 'NONCE_KEY',        '`777@4[T4`b36PdZD1[8xTL{E.+0--d6DVt3[%nEjYyF]0T-SUK^8j@/,-VOdchx' );
define( 'AUTH_SALT',        '^g|( Pi}srL}.:~(<w|_a..g.B!g5OE}/5Gw:2y_ZJ6SMPN&Mep/G,gjV.N5B-T<' );
define( 'SECURE_AUTH_SALT', 'LvcL_d7HW7-28ZG;9nEb@({tn|>8`LabmC$B!TuSA_z:6+`6%&(EGwjWILcTK1XC' );
define( 'LOGGED_IN_SALT',   '>8C04E3WLV CV2A>5%AB1hSi}^%KTyE,>$zyf.FM=nGbATvgx* J=jn-Cl#(ZO&L' );
define( 'NONCE_SALT',       'E^h.:3wfTt;MlV1czY&z3D0N63m@PG%WAR<,@Pm vV.=0}t;uN*=3VrkM!wp3s=R' );

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
