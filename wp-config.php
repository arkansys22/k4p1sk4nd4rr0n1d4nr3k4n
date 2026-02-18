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
define( 'DB_NAME', 'kapiskandarroni_db' );

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
define( 'AUTH_KEY',         '^sqnIWts?^viTnQ4h0Bp.J8k3zs.i8C#7&`Xx]O]/zx!K{LFg+1ZRtaEb4%AI;&p' );
define( 'SECURE_AUTH_KEY',  ':;nhdg_B}r9~imuKBN54r8hMH=|Y!9%b<A+RC%=+5XKA*:q|TqkV?F?4xw&+)Tj/' );
define( 'LOGGED_IN_KEY',    'w]qtPc!:Cex.gog7>V)GV3*N.l%HGgAFjp6(w.3Vn9TLO2K/?@}N#qphy`dNSV#F' );
define( 'NONCE_KEY',        '$M@tfiYsY`#wE:V2Z5n3h;dF?a!)9B?(y8NaB!Hd&O,7z4NI KT`]Sbei(`6GP(D' );
define( 'AUTH_SALT',        '}.>[[Mhl}RK|&jkCQ}dR7d*]6emwFIP~% e=Ig+a?q(=V[(IWEVPVylk(_SE18X~' );
define( 'SECURE_AUTH_SALT', 'OMh12KgO~z1@Tn~`&pD}I?/M3Hqy4lh=$ZDI+Ck?i1l8qw&savmsv<1+/>UIa!4E' );
define( 'LOGGED_IN_SALT',   'v%AqMbd{+R,!ci%#dC#b~2}{(ZU:YDB]tK}`*peY[0A NR R[KZBdb[V8@!qss07' );
define( 'NONCE_SALT',       '(^1VbV`O2Qa2F5*ef/)f@@Y^R@`Yn:+F}4tMid1GF>&0vfzF}G:]g^BO7s0jSz?z' );

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
