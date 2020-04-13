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
define( 'DB_NAME', 'vietnam_chronicles' );

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
define( 'AUTH_KEY',         'n7,Oy.eWR4lP5 +^1e0>G]~*Cr*DU1d3RsCu]YGQi[MR0|p:IfLE|y_r9U.M{@E_' );
define( 'SECURE_AUTH_KEY',  'Akb{N!NImKwH;<%=GY>$(PzXAr|N2IHVxFk?W@|*H<nyA,%xepZV#$3lN s=Adyk' );
define( 'LOGGED_IN_KEY',    '-xljrai<Yo5,mL/Dy416d5aM~UGqHh#YZ)]OSH{gC*?bqpZ>!Y5#`4]vI}eG^GC8' );
define( 'NONCE_KEY',        'Hpm|E}npPA)o1X59T.3;5=N_v-i)OJO#7zItwVkx<ZU7[L{]VomWDcJXtv`6C$uj' );
define( 'AUTH_SALT',        'ety,@SQ3GCusP}|P*9abaMLbZL}dzA?t4SS<Qh]ayZ)(bN(TC5GBV?vOs1&3#2=9' );
define( 'SECURE_AUTH_SALT', '5wFr)i|8N<Q|:mcWPzb2?^W[XDqWn|EY?5dv9RT?;[^+Kc-H*)s=,9A^)<cMT+/&' );
define( 'LOGGED_IN_SALT',   '#/Larmx_vjW#NLscpmO!H6sbH{9b/p|K21q4#W6{YE)!A>FvH&z!S4lA}|M{4^S1' );
define( 'NONCE_SALT',       'r07^:+,bJ6g`.V/uBIH)d( cUKAD1/ra&l%2~wz+FE7^puRx7P[m-AQWB}yc|Y3/' );

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
