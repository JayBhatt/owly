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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'news' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '72}%neDt.Md<cr!)-O63O5Fk,o,0FR 0]xIaGUEEnhrj!K1*@hE<Y5Iw#=X5kL|-' );
define( 'SECURE_AUTH_KEY',  '0|92Spz>RA5wP-ZoyMS+Y;rwYrP{NT[3pHZvVpydEd>iJzO0x7m[[[U0o0UMSXom' );
define( 'LOGGED_IN_KEY',    'oNsTt&|@!KSi,HpMn^.!IK_jqL1{fsVh=,eu7K;fF}D+k)Z[24_G%,js0C5@Os?]' );
define( 'NONCE_KEY',        '2GN|OCd>uPbaFFu1d%|Pkgw,Zr[l_3PnC.?o*,7A AMIx.CE?5~ wDPi!=mppJ{B' );
define( 'AUTH_SALT',        '7kIGrCxw~tvvHxrGVYVqKE^R{ nj;_9iKvS!&v-`?a.xdy`Q.i,H%kuG*rLcF,{M' );
define( 'SECURE_AUTH_SALT', '%H%G1Ez=SoVYfm&=3^3G1NIG]S$h%2A]},_[cHtX]`1blw:Ju47)xM+fZ@ (;s*P' );
define( 'LOGGED_IN_SALT',   '_m<lqYxx9~9V/|14+C(pF3:6NB+n3Ux#j)~z6OR#-??D%1pdfAeI2cv~WI [-.Jv' );
define( 'NONCE_SALT',       ';t$cM|L7eML#GLD?Fs6w0IA&MB@ETgAR}d`395*42Sw`icdgJ[M`m(yLSA*:B#s|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'news_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
