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
define( 'DB_NAME', 'wordpress-blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'T>tm=WKG;mTMj0 aH9!M87@{z*x`bAN$W@`3a`<6~;4N2[I_S9fu`]O/W9%r+{*r' );
define( 'SECURE_AUTH_KEY',  '&Nxz~c) *Hwbz$45cfLqN.&Q%R7hIs3?!}CYOtX=dPXB>LA,+1QV]59|P,+?|w{1' );
define( 'LOGGED_IN_KEY',    'FLe]9*)rp^fAA$y=t62{vN:_(1_0G]9RCWXYaiQ[x{g;~JN<w46$(9J7BMfOWD7+' );
define( 'NONCE_KEY',        '[fZAZ7+~Rw@x@!Izo[=^cB<SF~jOexM.-%_EH~u>c]lW?X=`an Kb*vq%Th[R:x<' );
define( 'AUTH_SALT',        '[aW=p{aEtC/DzdE-_O7Eer95,+hTt?FVliwcT&IR:88Kgm!I57f6oQ~p1wU%rhP9' );
define( 'SECURE_AUTH_SALT', ']_|WxB dgb}$,~LDB3KHk.wn&N7]8_e%I~fgosLEu_GWF#i}!@6ZET%sh=fjn6AG' );
define( 'LOGGED_IN_SALT',   '!h)oo|@.vSUc]W_/0{MjM/GTdh~GW>q6K%p^lAj;svq.SWo{FNuIa#i i<zpmjEm' );
define( 'NONCE_SALT',       '9EJ*=RmF88lw5B{/_8Jb~BNo7j;F(L}!<{8|[z[$8[5yr9.A/>PCC<D^)Q!6BeU{' );

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
