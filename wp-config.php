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
define( 'DB_NAME', 'exo_wordpress' );

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
define( 'AUTH_KEY',         '4=500M54YjaR!]O<3=F[lUKi#J$|N^?as=RA+(<w0(rR&!9X};]w^f@hf<s{2zMH' );
define( 'SECURE_AUTH_KEY',  'Zy_B%7Cu0aN{=CPDdo9f|]+/)Kc;zqv[V/xk$ikJG3wzrf-!93_AJB=Z2GJ1D >X' );
define( 'LOGGED_IN_KEY',    'vOG`i%zA/21k$+8|^<Swx%WNWYn,j`C*O8`,!<fYx_nSB%R, Wn);;wmlkl^(?@;' );
define( 'NONCE_KEY',        '^bjOWTI0(n{/Bbnmj,(S))~FFtniD-LD]X<93gWDuO>3<J.k/R@ E7QzPEt~.GA_' );
define( 'AUTH_SALT',        'c2,gvq*V`,[ x<!Z.L5g7Qm@AUgw4;z[XOQ09Z%G95,w~&Q(J8LCw+b+$_|ynKU>' );
define( 'SECURE_AUTH_SALT', 'amTagkV0r=B$#M~?E@Y2%G,>fI<]3Su~ao( nKE`F-!Qjri(rg1e v(I16L i%RY' );
define( 'LOGGED_IN_SALT',   'FC*!IPPb|x8q]U9TddT6N=oz/g@A<&zG]O~,9920X{%ik1I~RZP9I&C&(aRmVGt`' );
define( 'NONCE_SALT',       '5zr|1TxoHmP(f^PVRQ;^ML}#(0+JYNW(MnxJ1byg&>{_b1e<8/Y3^d~`PGE_J=pK' );

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
